<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Cache\Factory as Cache;

class HomeController extends BaseController {

	public function __construct(Request $request, Cache $cache)
	{
		$this->cache = $cache;
		$this->request = $request;
		$this->namespace = __NAMESPACE__;
		$this->basename = class_basename($this);
        $this->views_cache = $cache->store('frontend_views');
	}

	public function index()
	{
		$key = $this->getKeyName(__function__);

		if ($this->views_cache->has($key)) {
			$view = $this->views_cache->get($key);
		} else {
			$vars = [
				'page_title' => '',
				'request' => $this->request,
			];
			$view = view('pages.home',compact('vars'))->render();
			$this->views_cache->add($key, $view, config('app.cache_duration'));
		}
		return $view;
	}

	public function cv()
	{
		$key = $this->getKeyName(__function__);

		if ($this->views_cache->has($key)) {
			$view = $this->views_cache->get($key);
		} else {
			$vars = [
				'page_title' => '',
				'request' => $this->request,
			];
			$view = view('pages.cv',compact('vars'))->render();
			$this->views_cache->add($key, $view, config('app.cache_duration'));
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
			$sitemap->add(url('/london-laravel-developer'), '2019-05-21T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/northampton-laravel-developer'), '2019-05-21T12:00:00+02:00','1.0','monthly');
		}

		return $sitemap->render('xml');
	}
}