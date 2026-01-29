<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function index()
	{
        $data['title'] = "Login Page";
		$this->load->view('auth/index',$data);
	}
}
