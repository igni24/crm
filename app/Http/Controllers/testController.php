<?php

namespace igni24\Http\Controllers;

use igni24\Http\Controllers\Controller;

class testController extends Controller {
	public function test() {
		return "hello controller";
	}

	public function test2($param) {
		return view('user.inventario')->with('mensaje', 'Su Articulo ha Sido Publicado');
	}

	public function loadModal($id) {
		return view('auth.passwords.reset');
	}
}