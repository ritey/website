<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Repository as Cache;

class BaseController extends Controller {

	protected $namespace = __NAMESPACE__;

	protected $basename;

	public function __construct(Cache $cache) {
		if (env('APP_ENV') == 'local') {
			$cache->flush();
		}
	}

	protected function getKeyName($string = '') {
		return md5(snake_case(str_replace('\\','',$this->namespace) . $this->basename . '_' . $string));
	}
}