<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->model("Course");
		$data['courses'] = $this->Course->show_courses();
		$this->load->view('courses_view', $data);
	}

	public function create()
	{
		$new_course = $this->input->post();
		$this->load->model("Course");
		$this->Course->create($new_course);
		redirect("/");
	}

	public function destroy($id)
	{
		$this->load->model("Course");
		$data['course'] = $this->Course->course_by_id($id);
		$this->load->view("courses_destroy", $data);
	}

	public function delete($id)
	{
		$this->load->model("Course");
		$this->Course->delete($id);
		redirect("/");
	}
}
