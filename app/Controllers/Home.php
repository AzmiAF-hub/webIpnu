<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index($param)
	{
		echo view('page/' . $param);
	}
	
	public function register()
	{
		$model = new \App\Models\Jabatan();

		$data = [
			"jabatan" => $model->findAll()
		];

		echo view('page/register', $data);
	}
	//--------------------------------------------------------------------

}
