<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}

	public function index()
	{
		//print_r($data);
		$data['name']=$this->session->all_userdata();
		print_r($data);
		$this->load->template('home_form',$data);
	}
}
