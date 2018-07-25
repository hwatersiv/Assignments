<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

	public function login_validation()
	{
		$login_data = $this->input->post();
		$this->load->model('Login');
		$this->Login->login_validate($login_data);
		if(empty($this->Login->login_validate($login_data)))
		{
			$this->session->set_flashdata('login_err', "The email or password is incorrect.");
			redirect("/");
		}
		else
		{
			$user_data = $this->Login->login_validate($login_data);
			$this->session->set_userdata($user_data);
			$this->load->view("welcome");
		}
	}

	public function reg_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', "required|alpha");
		$this->form_validation->set_rules('last_name', 'Last Name', "required|alpha");
		$this->form_validation->set_rules('email', 'Email', "required|valid_email");
		$this->form_validation->set_rules('password', 'Password', "required|min_length[8]");
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', "required|min_length[8]|matches[password]");
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect("/");	
		}
		else
		{
			$this->session->set_userdata($this->input->post());
			redirect("/logins/create_user");
		}
	}

	public function create_user()
	{
		$this->load->model('Login');
		$user_data = $this->session->userdata;
		$this->Login->create_user($user_data);
		$this->session->set_flashdata('success', "You have been registered! Thank You!");
		redirect("/");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}