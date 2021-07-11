<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
	public function __construct()
	{
		$this->ProductModel = new ProductModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Home | APBPA',
			'barang' => $this->ProductModel->getAllProduct
		];

		dd($this->ProductModel->getProduct);
		//echo view('layout/header', $data);
		//echo view('Pages/home',$data);
		//echo view('layout/footer',$data);
	}
}
