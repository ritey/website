<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $vars = [
            'page_title' => '',
            'request' => $this->request,
        ];

        return view('pages.home', compact('vars'))->render();
    }

    public function cv()
    {
        $vars = [
            'page_title' => '',
            'request' => $this->request,
        ];

        return view('pages.cv', compact('vars'))->render();
    }

    public function sitemap()
    {
        $sitemap = \App::make('sitemap');

        $sitemap->setCache('laravel.sitemap', 3600);

        if (!$sitemap->isCached()) {
            $sitemap->add(url('/'), '2016-07-04T12:00:00+02:00', '1.0', 'monthly');
            $sitemap->add(url('/hire-me'), '2016-07-04T12:00:00+02:00', '1.0', 'monthly');
            $sitemap->add(url('/freelance-php-developer'), '2016-07-04T12:00:00+02:00', '1.0', 'monthly');
            $sitemap->add(url('/london-laravel-developer'), '2019-05-21T12:00:00+02:00', '1.0', 'monthly');
            $sitemap->add(url('/northampton-laravel-developer'), '2019-05-21T12:00:00+02:00', '1.0', 'monthly');
        }

        return $sitemap->render('xml');
    }
}
