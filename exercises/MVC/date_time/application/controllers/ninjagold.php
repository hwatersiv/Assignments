<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjagold extends CI_Controller {

	public function index()
	{
		$this->load->view('gold_index_view');
	}

	public function farm()
	{
		echo "you made it to the farm";
	}

	public function cave()
	{
		
	}

	public function house()
	{
		
	}

	public function casino()
	{
		
	}

}
?>