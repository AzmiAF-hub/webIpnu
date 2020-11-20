<?php namespace App\Controllers;

class View extends BaseController
{
	public function index($param)
	{
		$this->session = \Config\Services::session();
        $this->session->start();

		if($this->session->get('username') == null){
			$this->session->destroy();
			echo view('unsigned/' . $param);
		} else {
			return redirect()->to('/home');
		}
	}
	
	public function register()
	{
		$model = [
			'jabatan' => new \App\Models\Jabatan(),
			'periode' => new \App\Models\Periode()
		];

		$data = [
			"jabatan" => $model['jabatan']->findAll(),
			"periode" => $model['periode']->findAll()
		];

		echo view('unsigned/register', $data);
	}

	public function home()
	{
		$this->session = \Config\Services::session();
        $this->session->start();

		if($this->session->get('username') !== null){
			$model = [
				'jabatan' => new \App\Models\Jabatan(),
				'periode' => new \App\Models\Periode(),
				'pendaftar' => new \App\Models\Pendaftar()
			];
	
			$data = [
				"jabatan" => $model['jabatan']->findAll(),
				"periode" => $model['periode']->findAll(),
				"pendaftar" => $model['pendaftar']->findAll()
			];

			echo view('signed/dashboard', $data);
		} else {
			return redirect()->to('/');
		}
	}

	public function logout()
	{
		$this->session = \Config\Services::session();
		$this->session->destroy();

		return redirect()->to('/');
	}
}
