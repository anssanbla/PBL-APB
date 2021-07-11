<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Favorite extends BaseController
{
    public function index()
    {
        $model = new FavoriteModel();
        $data = [
            'title' => 'favorit | APBPA',
            'tbl_product' => $model->getfavorite()
        ];
        echo view('layout/header', $data);
        echo view('Pages/favorite');
        echo view('layout/footer');
    }
}
