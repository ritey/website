<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Cache\Repository as Cache;
use App;

class HomeController extends BaseController {

	public function __construct(Request $request, Cache $cache)
	{
		parent::__construct($cache);
		$this->namespace = __NAMESPACE__;
		$this->basename = class_basename($this);
		$this->cache = $cache;
		$this->request = $request;
	}

	public function index()
	{
		$key = $this->getKeyName(__function__);

		if ($this->cache->has($key)) {
			$view = $this->cache->get($key);
		} else {
			$vars = [
				'page_title' => '',
				'request' => $this->request,
			];
			$view = view('pages.home',compact('vars'))->render();
			$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	public function cv()
	{
		$key = $this->getKeyName(__function__);

		if ($this->cache->has($key)) {
			$view = $this->cache->get($key);
		} else {
			$vars = [
				'page_title' => '',
				'request' => $this->request,
			];
			$view = view('pages.cv',compact('vars'))->render();
			$this->cache->add($key, $view, env('APP_CACHE_MINUTES'));
		}
		return $view;
	}

	public function sitemap()
	{
		$sitemap = App::make('sitemap');

		$sitemap->setCache('laravel.sitemap',3600);

		if (!$sitemap->isCached()) {
			$sitemap->add(url('/'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/hire-me'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/freelance-php-developer'), '2016-07-04T12:00:00+02:00','1.0','monthly');
		}

		return $sitemap->render('xml');
	}
}