<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_header extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->template('home_form');
	}
}
