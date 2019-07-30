<?php

namespace App\Http\Controllers;

class AddressesController extends Controller {

	public function index()
	{
		$is_auth = session()->get('is_auth');
		if(!$is_auth) {
			return redirect('login');
		}

		return view('addresses');
	}
}