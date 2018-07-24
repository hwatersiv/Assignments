<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statics extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function login_validation()
	{
		$login_data = $this->input->post();
		$this->load->model('Data');
		$this->Data->login_validate($login_data);
		if(empty($this->Data->login_validate($login_data)) || $this->Data->login_validate($login_data) == FALSE)
		{
			$this->session->set_flashdata('log_errors', "The email or password is incorrect.");
			redirect("/");
		}
		else
		{
			$user_data = $this->Data->login_validate($login_data);
			$this->session->set_userdata($user_data);
			$show_users['users'] = $this->Data->show_users();
			$this->load->view("login", $show_users);
		}
	}

	public function reg_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', "required|alpha");
		$this->form_validation->set_rules('alias', 'Alias', "required");
		$this->form_validation->set_rules('email', 'Email', "required|valid_email");
		$this->form_validation->set_rules('password', 'Password', "required|min_length[8]");
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', "required|min_length[8]|matches[password]");
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('reg_errors', validation_errors());
			redirect("/");	
		}
		else
		{
			$this->session->set_userdata($this->input->post());
			redirect("/statics/create_user");
		}
	}

	public function create_user()
	{
		$this->load->model('Data');
		$user_data = $this->session->userdata;
		$this->Data->create_user($user_data);
		$this->session->set_flashdata('reg_success', "You have been registered! Thank You!");
		redirect("/");
	}

	public function show_users()
	{		
		

	}

	public function show_profile($user_id)
	{
		$this->load->model('Data');
		$user['user'] = $this->Data->show_user_by_id($user_id);
		$this->load->view('user', $user);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}

?>