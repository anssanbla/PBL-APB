<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'tbl_product';
    protected $allowedFields = ['id_user', 'nama_product', 'harga', 'berat', 'alamat', 'deskripsi', 'input_gambar', 'input_gambar_2', 'input_gambar_3', 'input_gambar_4'];

    public function getProduct()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user')
            ->get()->getResultArray();
    }
    public function search($keyword)
    {
        // $builder = $this->table('tbl_product');
        // $builder->like('nama_product', $keyword);
        // return $builder;
        return $this->table('tbl_product')->like('nama_product', $keyword);
    }
    public function getAllProduct()
    {
        return $this->db->table('tbl_product')
        ->get()->getResultArray();
    }

    //for home
    public function getAllProductHome()
    {
        return $this->db->table('tbl_product')
        ->limit(8)->get()->getResultArray();
    }

    public function sortByHargaMax()
    {
        return $this->db->table('tbl_product')
        ->orderBy('harga','ASC')->get()->getResultArray();     
    }
}
