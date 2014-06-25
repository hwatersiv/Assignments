<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dates_times extends CI_Controller {

	public function index()
	{
		$this->load->view('date_time.php');

	}

	public function get_date_time()
	{
		date_default_timezone_set('America/Los_Angeles');
		$date = array('date' => date('M d, Y', time()), 'time' => date('h:i a', time()));
		$this->load->view('date_time.php', $date);
	}

}