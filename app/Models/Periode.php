<?php namespace App\Models;

use CodeIgniter\Model;

class Periode extends Model
{
    protected $table = "periode";
    protected $primaryKey = 'id';
    protected $allowedFields = ["id", "tahun", "is_active"];
}