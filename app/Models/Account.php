<?php namespace App\Models;

use CodeIgniter\Model;

class Account extends Model
{
    protected $table = "account";
    protected $primaryKey = 'username';

    protected $allowedFields = ['nama_lengkap', 'nama_panggilan', 'username', 'password', 'id_jabatan', 'lembaga', 'id_periode'];
    protected $useTimestamps = false;
    protected $returnType     = 'array';
}