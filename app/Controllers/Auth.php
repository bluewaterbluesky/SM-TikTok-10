<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Auth extends ResourceController
{
	protected $request, $validation, $m_auth;
	public function __construct() {
		$this->request		= \Config\Services::request();
		$this->validation	= \Config\Services::validation();
		$this->m_auth		= new \App\Models\M_Auth();
	}

	public function signup() {
		$inputData = [
			'avatar_link' 	=> $this->request->getPost('avatar_link'),
			'fullname' 		=> $this->request->getPost('fullname'),
			'birthday' 		=> $this->request->getPost('birthday'),
			'address' 		=> $this->request->getPost('address'),
			'description' 	=> $this->request->getPost('description'),
			'contact' 		=> $this->request->getPost('contact'),
			'email' 		=> $this->request->getPost('email'),
			'username' 		=> $this->request->getPost('username'),
			'password' 		=> $this->request->getPost('password'),
			'mall' 			=> $this->request->getPost('mall'),
			'valid_id_link' => $this->request->getPost('valid_id_link'),
		];

		$this->validation->withRequest( $this->request )->setRules([
			'avatar_link'	=> [
				'label'		=> 'Avatar',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'fullname'		=> [
				'label'		=> 'Full Name',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'birthday'		=> [
				'label'		=> 'Birthday',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'address'		=> [
				'label'		=> 'Address',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'description'	=> [
				'label'		=> 'Description',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'contact'		=> [
				'label'		=> 'contact',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'email'		=> [
				'label'		=> 'Email',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'username'		=> [
				'label'		=> 'Username',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'password'		=> [
				'label'		=> 'Password',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'mall'		=> [
				'label'		=> 'Mall',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'valid_id_link'	=> [
				'label'		=> 'Valid ID',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => '{field} is required.'
				]
			],
			'agreement_1'	=> [
				'label'		=> 'First Agreement',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => 'You must agree to this before submitting.'
				]
			],
			'agreement_2'	=> [
				'label'		=> 'Second Agreement',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => 'You must agree to this before submitting.'
				]
			],
			'agreement_3'	=> [
				'label'		=> 'Third Agreement',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => 'You must agree to this before submitting.'
				]
			],
			'agreement_4'	=> [
				'label'		=> 'Fourth Agreement',
				'rules'		=> 'required',
				'errors'	=> [
					'required' => 'You must agree to this before submitting.'
				]
			]
		]);

		if( $this->validation->withRequest( $this->request )->run() ) {
			$this->m_auth->signup($inputData);
			return $this->respondCreated([
				'message'	=> 'Data submitted!'
			]);
		} else {
			return $this->fail( $this->validation->getErrors(), 404 );
		}
	}
}
