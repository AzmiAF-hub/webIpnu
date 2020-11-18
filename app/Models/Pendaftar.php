<?php namespace App\Models;

use CodeIgniter\Model;

class Pendaftar extends Model
{
    protected $table = "pendaftar";
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_lengkap', 'nama_panggilan', 'username', 'password', 'id_jabatan', 'lembaga', 'id_periode'];
    protected $useTimestamps = false;
    protected $returnType     = 'array';
}