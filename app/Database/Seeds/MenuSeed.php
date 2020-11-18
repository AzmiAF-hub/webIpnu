<?php

namespace App\Database\Seeds;

class MenuSeed extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                "nama" => "Dashboard",
                "is_subMenu" => "0"
            ], [
                "nama" => "Account",
                "is_subMenu" => "0"
            ], [
                "nama" => "Account_Account Verified",
                "is_subMenu" => "1"
            ], [
                "nama" => "Account_Account Registrator",
                "is_subMenu" => "1"
            ], [
                "nama" => "Keuangan",
                "is_subMenu" => "0"
            ], [
                "nama" => "Persuratan",
                "is_subMenu" => "0"
            ], [
                "nama" => "Artikel",
                "is_subMenu" => "0"
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO jabatan (name, no_auth VALUES(:name:, :id_auth:)",
        //         $data
        // );

        // Using Query Builder
        // foreach ($data as $val){
        //     $this->db->table('menu')->insert($val);
        // }
    }
}
