<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('students_registration_model','registration');
	}

	public function index()
	{
		$data['classes']=$this->registration->get_classes();
		$this->load->template('classes_form',$data);
		
	}
	public function display()
	{
		$this->load->model('classes_model');
		$class_id=$this->uri->segment(3);
		$data['class_name']=$this->uri->segment(4);
		$data['class_data']=$this->classes_model->display_data($class_id);
		$data['classes']=$this->registration->get_classes();
		$this->load->template('classes_form',$data);
	}
	
}
