<?php namespace App\Controllers;

class Config extends BaseController
{
	public function session()
	{
        $session = $this->session->get('username');
        
        return $session;
    }
}