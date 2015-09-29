<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students_registration extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','date'));
		$this->load->model('students_registration_model','registration');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['classes']=$this->registration->get_classes();
		$this->load->template('students_registration_form',$data);
	}
	public function registration()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('fullname', 'Student full name', 'trim|required|min_length[5]|max_length[40]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'min_length[5]|max_length[30]');
		$this->form_validation->set_rules('contact', 'Contact', 'min_length[9]|max_length[20]');
		$this->form_validation->set_rules('guardianname', 'Guardian name', 'required|min_length[9]|max_length[20]');
		$this->form_validation->set_rules('dob', 'Date of birth', 'required|min_length[8]|max_length[20]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
			$upload_data=$this->upload->data();
			$photoid=$upload_data['file_name'];
			$reg_date=$this->engtonepali();
			$this->registration->insert_data($photoid,$reg_date);
			
				$data['classes']=$this->registration->get_classes();
				$data['message']="successfully inserted record !";
				$data['pagepath']="students_registration";
				$this->load->template('successpage',$data);
			
			
			
			}
		}
		
	}
	
	public function engtonepali()
	{
		$datestring = "%Y/%m/%d";
		$time = time();
		$raw_date=mdate($datestring, $time);
		$data=$this->registration->convert_date($raw_date);
		return $data;
	}
	
	public function delete_student()
	{
		$studenthasclassid=$this->uri->segment(3);
		$this->registration->delete($studenthasclassid);
			redirect('/classes');
			echo "successfully deleted";
		
	}
	
}
