<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey_index');
	}

	public function results()
	{
		$data = $this->input->post();
		$this->session->set_userdata('counter',$this->session->userdata('counter') + 1);
		$this->session->set_userdata($data);
		$this->load->view('survey_results');
	}
}