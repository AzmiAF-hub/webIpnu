<?php

namespace App\Database\Seeds;

class PeriodeSeed extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                "tahun" => "2019 / 2020",
                "is_active" => "1"
            ],[
                "tahun" => "2020 / 2021",
                "is_active" => "0"
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO jabatan (name, no_auth VALUES(:name:, :id_auth:)",
        //         $data
        // );

        // Using Query Builder
        foreach ($data as $val){
            $this->db->table('periode')->insert($val);
        }
    }
}