<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Factory as Cache;

class BaseController extends Controller {

	protected $namespace = __NAMESPACE__;

	protected $basename;

	protected function getKeyName($string = '') {
		return md5(snake_case(str_replace('\\','',$this->namespace) . $this->basename . '_' . $string));
	}
}