<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\FavoriteModel;
use App\Models\ProductModel;
use CodeIgniter\HTTP\Request;

class Contact extends BaseController
{
    protected $contactModel;
    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }
    public function index()
    {
        $contact = $this->contactModel->find();
        $data = [
            'title' => 'Contact | APBPA',
            'contact' => $contact
        ];
        echo view('layout/header', $data);
        echo view('Pages/contact');
        echo view('layout/footer');
    }
    public function save()
    {
        /*dd($this->request->getVar());*/
        $this->contactModel->save([
            'nama_fb' => $this->request->getVar('nama_fb'),
            'subjek_fb' => $this->request->getVar('subjek_fb'),
            'email_fb' => $this->request->getVar('email_fb'),
            'nomor_fb' => $this->request->getVar('nomor_fb'),
            'pesan_fb' => $this->request->getVar('pesan_fb'),
        ]);
        return redirect()->to('/contact');
    }
}
