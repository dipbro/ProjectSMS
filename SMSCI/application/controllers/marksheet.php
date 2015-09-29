<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marksheet extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->template('marksheet_form');
	}
}
