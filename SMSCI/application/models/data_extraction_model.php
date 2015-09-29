<?php 
class Data_extraction_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function get_student_status($student_status_id)
    {
        $this->db->from('StudentStatus');
        $this->db->where('StudentStatusId',$student_status_id);
        $query=$this->db->get();
        return $query->result();
    }
}