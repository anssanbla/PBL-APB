<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteModel extends Model
{

    public function getfavorite()
    {
        return $this->db->table('tbl_product')
            ->join('tbl_data_user', 'tbl_data_user.id_user=tbl_product.id_user')
            ->get()->getResultArray();
    }
}
