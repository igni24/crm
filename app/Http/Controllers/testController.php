<?php

namespace igni24\Http\Controllers;

use igni24\Http\Controllers\Controller;

class testController extends Controller {
	public function test() {
		return "hello controller";
	}

	public function test2($param) {
		return "hello controller with param: " . $param;
	}
}