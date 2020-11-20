<?php namespace App\Models;

use CodeIgniter\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = 'id';
    protected $allowedFields = ["id", "nama"];
}