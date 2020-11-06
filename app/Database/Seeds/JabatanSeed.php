<?php namespace App\Database\Seeds;

class JabatanSeed extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    // [
                        // 'name' => 'Dep. Pendidikan',
                        // 'id_auth'    => '4'
                    // ],
                    // [
                        // 'name' => 'Dep. Olahraga',
                        // 'id_auth'    => '4'
                    // ],
                    // [
                        // 'name' => 'Dep. Kesehatan',
                        // 'id_auth'    => '4'
                    // ],
                    // [
                        // 'name' => 'Dep. Humasy',
                        // 'id_auth'    => '4'
                    // ],
                    // [
                        // 'name' => 'Dep. Kebersihan',
                        // 'id_auth'    => '4'
                    // ]
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO jabatan (name, no_auth VALUES(:name:, :id_auth:)",
                //         $data
                // );

                // Using Query Builder
                // $this->db->table('jabatan')->insert($data);
        }
}