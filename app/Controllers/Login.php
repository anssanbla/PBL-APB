<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Login;

class Login extends BaseController
{
	public function __construct()
	{
		$this->M_Login = new M_Login();
	}

	public function index()
	{
		echo view('page/login');
	}

	public function cek_login()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$cek = $this->M_Login->getUser($username, $password);

		if(($cek['username'] == $username) && ($cek['password'] == $password)){
			return redirect()->to('/home');
		}else{
			return redirect()->to('/login');
		}
		
	}
}
