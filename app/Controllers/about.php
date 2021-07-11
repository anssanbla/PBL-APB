<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About|APBPA'
        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/about');
        echo view('layout/footer');
    }
}
