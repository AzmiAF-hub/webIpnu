<?php

namespace App\Database\Seeds;

class AuthSeed extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id_jabatan' => '5',
                'id_menu' => '1'
            ], [
                'id_jabatan' => '5',
                'id_menu' => '7'
            ], [
                'id_jabatan' => '6',
                'id_menu' => '1'
            ], [
                'id_jabatan' => '6',
                'id_menu' => '7'
            ], [
                'id_jabatan' => '7',
                'id_menu' => '1'
            ], [
                'id_jabatan' => '7',
                'id_menu' => '7'
            ], [
                'id_jabatan' => '8',
                'id_menu' => '1'
            ], [
                'id_jabatan' => '8',
                'id_menu' => '7'
            ], [
                'id_jabatan' => '9',
                'id_menu' => '1'
            ], [
                'id_jabatan' => '9',
                'id_menu' => '7'
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO jabatan (name, no_auth VALUES(:name:, :id_auth:)",
        //         $data
        // );

        // Using Query Builder
        foreach ($data as $val) {
            $this->db->table('authority')->insert($val);
        }
    }
}
