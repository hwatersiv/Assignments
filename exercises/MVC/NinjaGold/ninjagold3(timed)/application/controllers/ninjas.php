<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjas extends CI_Controller {

	public function index()
	{
		$this->load->model('Ninja');
		$data['table'] = $this->Ninja->show();
		if(null == $this->session->userdata('your_gold'))
		{
			$this->session->set_userdata('your_gold', 0);
		}
		$this->load->view('ninjas_view', $data);
	}

	public function clear()
	{
		$this->session->sess_destroy();
	}

	
	private function add_value($gold, $location)
	{
		$this->session->set_userdata('your_gold', $this->session->userdata('your_gold') + $gold);
		$message = "You have earned {$gold} gold at the {$location}.";
		$this->load->model("Ninja");
		$this->Ninja->add($message, $changed);
	}


// foreach {
//	if it's 
// }
//



	public function process_money()
	{
		if ($this->input->post('building') == 'farm')
		{
			$earned_gold = rand(10,20);




			// $this->session->set_userdata('your_gold', $this->session->userdata('your_gold') + $earned_gold);
			// $message = "<p class='green'>You have earned ".$earned_gold." gold";
			// $this->load->model("Ninja");
			// $this->Ninja->add($message);
			redirect("/");

		}
		if ($this->input->post('building') == 'cave')
		{
			$earned_gold = rand(5,10);
			$this->session->set_userdata('your_gold', $this->session->userdata('your_gold') + $earned_gold);
			$message = "<p class='green'>You have earned ".$earned_gold." gold";
			$this->load->model("Ninja");
			$this->Ninja->add($message);
			redirect("/");
		}
		if ($this->input->post('building') == 'house')
		{
			$earned_gold = rand(2,5);
			$this->session->set_userdata('your_gold', $this->session->userdata('your_gold') + $earned_gold);
			$message = "<p class='green'>You have earned ".$earned_gold." gold";
			$this->load->model("Ninja");
			$this->Ninja->add($message);
			redirect("/");
		}
		if ($this->input->post('building') == 'casino')
		{
			$earned_gold = rand(-50,50);
			$this->session->set_userdata('your_gold', $this->session->userdata('your_gold') + $earned_gold);
			if ($earned_gold < 0)
			{
				$message = "<p class='red'>You have lost ".abs($earned_gold)." gold";
			}
			else
			{
				$message = "<p class='green'>You have earned ".$earned_gold." gold";
			}
			
			$this->load->model("Ninja");
			$this->Ninja->add($message);
			redirect("/");
		}
	}
}
