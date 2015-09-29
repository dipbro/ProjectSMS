<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('insert_form');
	}
    function insert_form()
    {
        $this->load->model('insert_model');
        $id=$this->insert_model->insert_record();
        echo $id;
        $data['message']="successfully inserted record";
        $this->load->view('insert_form',$data);
    }
}
