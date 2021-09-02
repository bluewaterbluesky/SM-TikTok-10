<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'SM Tiktok Promo',
			'content'	=> 'pages/home/index',
			'js'		=> 'js/home.js'
		];

		return view('home', $data);
	}

	public function signup() {
		$data = [
			'title'		=> 'Sign Up',
			'content'	=> 'pages/home/signup',
			'js'		=> 'js/signup.js'
		];

		return view('signup_template', $data);

		// $data = [
		// 	'title'		=> 'Under Maintenance',
		// 	'content'	=> 'pages/home/maintenance',
		// 	'js'		=> 'js/maintenance.js'
		// ];

		// return view('blue_template', $data);
	}

	public function maintenance() {
		$data = [
			'title'		=> 'Under Maintenance',
			'content'	=> 'pages/home/maintenance',
			'js'		=> 'js/maintenance.js'
		];

		return view('blue_template', $data);
	}
}
