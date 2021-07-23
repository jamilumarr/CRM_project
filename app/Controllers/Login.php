<?php

namespace App\Controllers;

use Config\Services;

class Login extends BaseController
{
	public function index()
	{
		return view('Login/index');
	}

	public function login()
	{

		$request = Services::request();
		$user = $request->getPost('username');
		$pass = $request->getPost('password');
		// var_dump($user,$pass);
		if ($user = 'admincx' && $pass =123) {
			return redirect()->to(base_url().'/home');
		} else {
			return redirect()->to('/');
		}
	}
}
