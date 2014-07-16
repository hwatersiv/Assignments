<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

	public function index()
	{
		$this->load->view('time_view.php');
	}
}
