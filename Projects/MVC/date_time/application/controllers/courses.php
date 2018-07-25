<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->view('add_course_page');
	}

	public function show($id)
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model("Course");
		$course = $this->Course->et_course_by_id($id);
		var_dump($course);
	}

	public function add()
	{
		
		$this->load->model("Course_model");

		$add_course = $this->Course_model->add_course($course_details);
		if($add_course)
			echo "Course is added";
	}
}