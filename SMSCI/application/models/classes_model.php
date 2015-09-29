<?php 
class Classes_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function display_data($class_id)
    {
        $this->db->select();
        $this->db->from('Students_view');
        $this->db->where('ClassId',$class_id);
        $this->db->where('StatusId','1');
        $this->db->where('StudentStatusId','1');
        $this->db->order_by('StudentName','asc');
        $query=$this->db->get();
        return $query->result();
        
    }
}