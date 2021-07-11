<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile|APBPA'
        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/profile');
        echo view('layout/footer');
    }
}
