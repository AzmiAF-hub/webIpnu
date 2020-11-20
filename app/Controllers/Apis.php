<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Apis extends Controller
{
    public function register()
    {
        $pendaftar = new \App\Models\Pendaftar();

        $request = \Config\Services::request();
        $input = $request->getPost();

        $data = array(
            "nama_panggilan" => $input["nama1"],
            "nama_lengkap" => $input["nama2"],
            "username" => $input["username"],
            "password" => password_hash($input["password1"], PASSWORD_DEFAULT),
            "id_jabatan" => $input["jabatan"],
            "lembaga" => $input["lembaga"],
            "id_periode" => $input["periode"]
        );

        $pendaftar->insert($data);
    }

    public function login()
    {
        $account = new \App\Models\Account();
        $periode = new \App\Models\Periode();
        $jabatan = new \App\Models\Jabatan();

        $request = \Config\Services::request();
        $input = $request->getGet();

        // CHECKING
        if($account->find($input['username'])){
            $result = $account->find($input['username']);
            
            
            if(password_verify($input['password'], $result['password'])){
                $this->session = \Config\Services::session();
                $this->session->start();

                $periode = $periode->find($result['id_periode']);
                $jabatan = $jabatan->find($result['id_jabatan']);
                
                $data = [
                    'username' => $result['username'],
                    'nama1' => $result['nama_lengkap'],
                    'nama2' => $result['nama_panggilan'],
                    'jabatan' => $jabatan['nama'],
                    'periode' => $periode['tahun']
                ];

                $this->session->set($data);

                return '/home';
            } else {
                return "Password tidak Cocok !!!";
            }

        } else {
            return "Username tidak ditemukan. Silahkan anda hubungi Admin !!!";
        }
    }
}