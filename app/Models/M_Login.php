<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Login extends Model
{
    public function __construct()
    {
      $this->db = \Config\Database::connect();  
    }

    public function getUser($username,$password)
    {
        return $this->db->table('tbl_user')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();

    }
}


?>