<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generators extends CI_Controller {

	public function index()
	{
		$this->load->view('generator_view');
	}

	public function get_word()
	{
		// $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$word = substr(md5(rand()), 0, 14);;

		// for ($i=0; $i < (count($word) < 14); $i++)
		// { 
		// 	$word = $characters[rand(0, strlen($characters) - 1)];
		// }

		$this->session->set_userdata('counter',$this->session->userdata('counter') + 1);
		$generate_word['word'] = $word;
		$this->session->set_userdata($generate_word);
		redirect('/');
	}
}