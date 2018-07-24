<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey_view');
	}

	public function submit_survey()
	{
		// if($this->input->post('counter') == 'twilightsparkle')
		// {
		// 	$counter = $this->session->userdata('counter');
		// 	$this->session->set_userdata('counter', $counter+1);
		// }

		$this->session->set_userdata('counter',$this->session->userdata('counter') + 1); // the nathan way
		$survey_info['name'] = $this->input->post('name');
		$survey_info['location'] = $this->input->post('location');
		$survey_info['language'] = $this->input->post('language');
		$survey_info['comment'] = $this->input->post('comment');
		$this->session->set_userdata($survey_info);
		redirect('surveys/result');

	}

	public function result(){

		$this->load->view('survey_result');
	}
}