<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->model('students_registration_model','registration');
        $this->load->model('profile_model');
	}

	public function index()
	{
		$data['classes']=$this->registration->get_classes();
		$this->load->template('students_profile',$data);
	}
    
    public function students_profile()
	{
		$data['classes']=$this->registration->get_classes();
        $student_id=$this->uri->segment(3);
        $class_id=$this->uri->segment(4);
        $data['student_profile']=$this->profile_model->display_profile($class_id,$student_id);
        $this->load->template('students_profile',$data);
	}
    public function page()
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url('profile/page');
        $config['total_rows'] = 200;
        $config['per_page'] = 20;
        
        $this->pagination->initialize($config);
        echo $this->pagination->create_links();
    }
}
