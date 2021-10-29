<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel12200454 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200454';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    /**
     * method untuk cek login dari table pengguna
     * berdasarkan nama dan password
     * @var String $user
     * @var String pass
     */

public function cekLogin($email, $sandi){
    return $this->where('email', $e)
                ->where('sandi', md5( $s) )->first();


    }
}