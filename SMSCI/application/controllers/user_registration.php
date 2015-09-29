<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_registration extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->template('user_registration_form');
	}
	
	function insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname','Full Name','required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('contact', 'Contact Number', 'trim|min_length[10]|max_length[25]|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[6]|max_length[32]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->template('user_registration_form');
		}
		else
		{
			$data['message']="successfully inserted";
			$data['pagepath']="user_registration";
			$this->load->model('user_registration_model');
			$photo =$this->user_registration_model->insert_record();
			echo $photo;
			$this->load->template('successpage',$data);
		}
		
	}
}
