<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function index()
	{
		$this->load->model("Note");
		$all_notes['notes'] = $this->Note->show_notes();
		$this->load->view('notes_view', $all_notes);
	}

	public function add()
	{
		$new_note['note'] = $this->input->post();
		$this->load->model("Note");
		$new_note['id'] = $this->Note->add($new_note);

		echo json_encode($new_note);

	}

	public function update($id)
	{
		$description = $this->input->post();
		$this->load->model("Note");
		$this->Note->update($description, $id);
	}

	public function delete($id)
	{
		$this->load->model("Note");
		$this->Note->delete($id);
	}
}

