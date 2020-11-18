<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index($param)
	{
		echo view('page/' . $param);
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

		echo view('page/register', $data);
	}
	//--------------------------------------------------------------------

}
