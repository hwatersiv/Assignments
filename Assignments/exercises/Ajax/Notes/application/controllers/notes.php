<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function index()
	{
		$this->load->model("Note");
		$data['notes'] = $this->Note->show_notes();
		$this->load->view('notes_view', $data);
	}

	public function add_note()
	{
		$new_note = $this->input->post();
		$this->load->model("Note");
		$id = $this->Note->add($new_note);
		$data = array('title' => $this->input->post('title'), 'id' => $id);
		echo json_encode($data);
	}

	public function update($id)
	{
		$description = $this->input->post();
		$this->load->model("Note");
		$id = $this->Note->update($description, $id);
	}

	public function delete($id)
	{
		$this->load->model("Note");
		$this->Note->delete($id);
	}
}
