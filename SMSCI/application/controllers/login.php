<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login_form');
	}
    function check_login()
    {
        $this->load->model('login_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		if($username && $password && $this->login_model->check_login_form($username,$password))
		{
			redirect('/home');
		}
		else
		{
			$this->show_login(true);
		}
        
    }
	
	function show_login( $show_error = false )
	{
        $data['error'] = "Username and password incorrect !";
        $this->load->helper('form');
        $this->load->view('login_form',$data);
    }
	
	function logout()
	{
		$session_data=array('username'=>'','userid'=>'');
		$this->session->unset_userdata('isLoggedIn',$session_data);
		$this->load->view('login_form');
	}
	
}
