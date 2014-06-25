<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjagold extends CI_Controller
{

	public function index()
	{
		$this->load->view('ninjagold_view');
		if( null === $this->session->userdata('gold'))
		{
			$this->session->set_userdata('gold', "0");
		}
	}

	public function process_money()
	{
		if($this->input->post('building') == 'farm')
		{
			$random = rand(10, 20);
			$this->session->set_userdata('gold', $this->session->userdata('gold') + $random);
			$this->session->set_userdata('message', "You have gained ".$random." gold.<br />".$this->session->userdata('message'));
			redirect('/');
		}

		if($this->input->post('building') == 'cave')
		{
			$random = rand(5, 10);
			$this->session->set_userdata('gold', $this->session->userdata('gold') + $random);
			$this->session->set_userdata('message', "You have gained ".$random." gold.<br />".$this->session->userdata('message'));
			redirect('/');
		}

		if($this->input->post('building') == 'house')
		{
			$random = rand(2, 5);
			$this->session->set_userdata('gold', $this->session->userdata('gold') + $random);
			$this->session->set_userdata('message', "You have gained ".$random." gold.<br />".$this->session->userdata('message'));
			redirect('/');
		}

		if($this->input->post('building') == 'casino')
		{	
			$this->session->set_userdata('color',"green");
			$gained_lost = "gained";
			$random = rand(-50, 50);
			if ($random < 0)
			{	

				$gained_lost = "lost";
				$color = "red";
				$this->session->set_userdata('color', $color);
			}
			$this->session->set_userdata('gold', $this->session->userdata('gold') + $random);
			$this->session->set_userdata('message', "You have ".$gained_lost." ".abs($random)." gold.<br />".$this->session->userdata('message'));
			redirect('/');
		}
	}
}