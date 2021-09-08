<?php

namespace App\Controllers;
use App\Helpers\TikTokHelper;

class Home extends BaseController
{
	protected $tiktokHelper;
	public function __construct() {
		$this->tiktokHelper = new TikTokHelper();
	}

	public function index()
	{
		$data = [
			'title'		=> 'SM Tiktok Promo',
			'content'	=> 'pages/home/index',
			'js'		=> 'js/home.js'
		];

		return view('home', $data);

		// $url = 'https://www.tiktok.com/@badhare/video/6999589897543748865?sender_device=pc&sender_web_id=6982447907165226498&is_from_webapp=v1&is_copy_url=0';
		// echo json_encode($this->tiktokHelper->getVideo($url), true);
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
