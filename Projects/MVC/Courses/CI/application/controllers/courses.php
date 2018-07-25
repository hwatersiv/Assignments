<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->model("course");
		$data['courses'] = $this->course->get_all_courses();

		// $view_data['courses'] = $data;
		$this->load->view('course_view',$data);
	}

	public function add_course()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model("course");
		$course = array (
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
		);
		$add_course = $this->course->add_course($course);
		// if($add_course === TRUE)
		// {
		// 	$this->session->set_userdata('message',"Course is added!");
		redirect("/");
		// }
	}

	public function destroy($course_id)
	{
		$this->load->model("course");
		$data['course'] = $this->course->get_course_by_id($course_id);
		$this->load->view('destroy_view', $data);
	}

	public function delete($course_id)
	{
		var_dump($course_id);
		$this->load->model("course");
		$this->course->delete($course_id);
		redirect("/");


	}
	
}