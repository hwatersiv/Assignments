<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokes extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
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
			redirect("/pokes/create_user");
		}
	}

	public function login_validation()
	{
		$login_data = $this->input->post();
		$this->load->model('Poke');
		$this->Poke->login_validate($login_data);
		if(empty($this->Poke->login_validate($login_data)) || $this->Poke->login_validate($login_data) == FALSE)
		{
			$this->session->set_flashdata('log_errors', "The email or password is incorrect.");
			redirect("/");
		}
		else
		{
			$user_data = $this->Poke->login_validate($login_data);
			$this->session->set_userdata($user_data);
			$show_users['users'] = $this->Poke->show_users($user_data[0]['id']);
			$show_users['poked_by'] = $this->Poke->poked_by($user_data[0]['id']);
			$this->load->view("landing", $show_users);
		}
	}

	public function create_user()
	{
		$this->load->model('Poke');
		$user_data = $this->session->userdata;
		$this->Poke->create_user($user_data);
		$this->session->set_flashdata('reg_success', "You have been registered! Thank You!");
		redirect("/");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}

	public function add_poke($id)
	{
		$user_data = $this->session->userdata;
		$this->load->model('Poke');
		$poke_num = $this->Poke->get_poke_num($id);
		$new_poke_num = ($poke_num[0]['pokes'] + 1);
		$this->Poke->add_poke($new_poke_num, $id);
		$this->Poke->add_to_poked_by($user_data);
		$show_users['users'] = $this->Poke->show_users($user_data[0]['id']);
		$show_users['poked_by'] = $this->Poke->poked_by($user_data[0]['id']);
		$this->load->view("landing", $show_users);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */