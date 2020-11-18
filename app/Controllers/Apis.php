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
            "nama_lengkap" => $input["nama1"],
            "nama_panggilan" => $input["nama2"],
            "password" => password_hash($input["password1"], PASSWORD_DEFAULT),
            "id_jabatan" => $input["jabatan"],
            "id_periode" => $input["periode"]
        );

        $pendaftar->insert($data);
    }

    public function login()
    {
        $account = new \App\Models\Account();

        $request = \Config\Services::request();
        $input = $request->getPost();

        // $msg = "";

        // CHECKING
        if($account->find($input['username'])){
            $result = $account->find($input['username']);
            
            if(password_verify($input['password'], $result['password'])){
                // return "Masuk Pak Eko !!!";
            } else {
                return "Password Tidak Cocok !!";
            }

        } else {
            return "Username Tidak Ditemukan";
        }
    }
}