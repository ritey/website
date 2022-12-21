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

    public function badge()
    {
        $state = hash('sha256', microtime(true).rand()); // Generate a random state
        $_SESSION['oauth2_state'] = $state; // Save the state
        $params = [
            'response_type' => 'code',
            'client_id' => 'y2sI8a0W3CZb5mQ8gKFIOz3VvXiVZR5C',
            'redirect_uri' => 'https://ritey.com/badge/auth/callback',
            'scope' => 'openid',
            'state' => $state,
        ];
        $authUrl = 'https://idea:gold@dev.idea.org.uk/oauth/authorize?'.
        http_build_query($params);
        header("Location: {$authUrl}"); // Redirect to iDEA to authorize

        exit;
    }

    public function badgeCallback()
    {
        $state = $_GET['state'];
        $code = $_GET['code'];
        if (!isset($code)) {
            exit('Failed to get an authorization code');
        }
        if (isset($state) && $state !== $_SESSION['oauth2_state']) { // Check the state is valid
            session_destroy();

            exit('OAuth2 invalid state!');
        }
        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'POST',
            'https://dev.idea.org.uk/oauth/token',
            [
                'form_params' => [
                    'client_id' => 'y2sI8a0W3CZb5mQ8gKFIOz3VvXiVZR5C',
                    'client_secret' => 'Lwn8fVuT2OCao49GbLDan4D05fc3fmQeCd7KEx4y',
                    'redirect_uri' => 'https://ritey.com/badge/auth/callback',
                    'code' => $code,
                    'grant_type' => 'authorization_code',
                ],
            ]
        );
        $json = json_decode($res->getBody());
        $_SESSION['oauth2_access_token'] = $json->access_token;
        $_SESSION['oauth2_id_token'] = $json->id_token;
        dd($_SESSION);
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
