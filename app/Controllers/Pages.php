<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        return view('pages/index');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function signup()
    {
        return view('pages/signup');
    }
    public function home()
    {
        $data = [
            'title' => 'Home | APBPA'
        ];
        echo view('layout/header', $data);
        echo view('Pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About|APBPA'
        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/about');
        echo view('layout/footer');
    }
    public function profile()
    {
        $data = [
            'title' => 'Profile|APBPA'
        ];
        echo view('layout/header-boots', $data);
        echo view('Pages/profile');
        echo view('layout/footer');
    }
    public function product()
    {
        //$product = $this->productModel->findAll();

        $data = [
            'title' => 'Product | APBPA',
            'product' => $this->productModel->getProduct()
        ];
        // $productModel = new ProductModel();
        echo view('layout/header', $data);
        echo view('Pages/product');
        echo view('layout/footer');
    }
    public function favorite()
    {
        $data = [
            'title' => 'Favorite | APBPA'
        ];
        echo view('layout/header', $data);
        echo view('Pages/favorite');
        echo view('layout/footer');
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Product | APBPA',
            'product' => $this->productModel->getProduct($id),
        ];

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product gaada bro');
        }
        echo view('layout/header', $data);
        echo view('Pages/detail');
        echo view('layout/footer');
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | APBPA'
        ];
        echo view('layout/header', $data);
        echo view('Pages/contact');
        echo view('layout/footer');
    }
    public function vendor()
    {
        $data = [
            'title' => 'Vendor | APBPA'
        ];
        echo view('layout/header', $data);
        echo view('Pages/Vendor');
        echo view('layout/footer');
    }
    public function save()
    {
        /*dd($this->request->getVar());*/
        $this->productModel->save([
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'berat' => $this->request->getVar('berat'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'input_gambar' => $this->request->getVar('input_gambar')
        ]);
        return redirect()->to('/pages/product');
    }
}
