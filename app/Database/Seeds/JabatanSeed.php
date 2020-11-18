<?php namespace App\Database\Seeds;

class JabatanSeed extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama' => 'Admin'
                    ], [
                        'nama' => 'Ketua / Wakil Ketua'
                    ], [
                        'nama' => 'Sekretaris / Wakil Sekretaris'
                    ], [
                        'nama' => 'Bendahara / Wakil Bendahara'
                    ],[
                        'nama' => 'Dep. Pendidikan'
                    ],[
                        'nama' => 'Dep. Perawatan'
                    ],[
                        'nama' => 'Dep. Olahraga'
                    ],[
                        'nama' => 'Dep. Keorganisasian'
                    ],[
                        'nama' => 'Dep. Keterampilan'
                    ]
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO jabatan (name, no_auth VALUES(:name:, :id_auth:)",
                //         $data
                // );

                // Using Query Builder
                foreach($data as $val){
                    $this->db->table('jabatan')->insert($val);
                }
        }
}