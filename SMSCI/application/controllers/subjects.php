<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subjects extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->model('subjects_model');
        $this->load->model('students_registration_model','registration');
	}

	public function index()
	{
        $data['classes']=$this->registration->get_classes();
        $data['subjects']=$this->getsubjects();
		$this->load->template('subjects_form',$data);
	}
    
    public function add()
    {
        $this->subjects_model->add_subjects();
        $this->index();
        
    }
    
    function getsubjects()
    {
        $data=$this->subjects_model->get_subjects();
        return $data;
    }
}
