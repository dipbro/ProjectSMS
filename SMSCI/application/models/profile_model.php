<?php 
class Profile_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function display_profile($class_id,$student_id)
    {
        $this->db->from('students_view');
        //$this->db->where('ClassId',$class_id);
        $this->db->where('StudentId',$student_id);
        $this->db->where('StatusId','1');
        $this->db->order_by("ClassName", "desc"); 
        $query=$this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}