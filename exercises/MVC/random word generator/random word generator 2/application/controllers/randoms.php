<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Randoms extends CI_Controller {

	public function index()
	{
		$this->load->view('randoms_view');
	}

	public function generate()	
	{
		$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$string = '';
		for ($i = 0; $i < 14; $i++) { 
			$string .= $characters[rand(0, strlen($characters) - 1)];
		};

		$this->session->set_flashdata('count', $this->session->flashdata('count') + 1);
		$this->session->set_flashdata('random', $string);
		redirect("/");
	}
}

