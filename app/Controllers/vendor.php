<?php

namespace App\Controllers;

use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Vendor extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        $model = new FavoriteModel();
        $data = [
            'title' => 'Vendor | APBPA',
            'tbl_product' => $model->getfavorite()

        ];
        echo view('layout/header', $data);
        echo view('Pages/Vendor');
        echo view('layout/footer');
    }
    public function save()
    {
        /*dd($this->request->getVar());*/
        $this->productModel->save([
            'id_user' => $this->request->getVar('id_user'),
            'nama_product' => $this->request->getVar('nama_product'),
            'harga' => $this->request->getVar('harga'),
            'berat' => $this->request->getVar('berat'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'input_gambar' => $this->request->getVar('input_gambar'),
            'input_gambar_2' => $this->request->getVar('input_gambar_2'),
            'input_gambar_3' => $this->request->getVar('input_gambar_3'),
            'input_gambar_4' => $this->request->getVar('input_gambar_4')
        ]);
        return redirect()->to('/product');
    }
}
