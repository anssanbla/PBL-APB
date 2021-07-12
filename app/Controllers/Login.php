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
		echo view('pages/login');
	}

	public function cek_login()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$cek = $this->M_Login->getUser($username, $password);

		if($cek){
			if (($cek['username'] == $username) && ($cek['password'] == $password)) {
				return redirect()->to('/home');
			} else {
				return redirect()->to('/login');
			}
		}else{
			echo "<script>";
			echo " alert('Username / Password Anda Salah ?!');      
            window.location.href='" . site_url('/login') . "';
            </script>";
		}
		
	}
}
