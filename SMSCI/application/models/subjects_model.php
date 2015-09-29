<?php 
class Subjects_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function add_subjects()
    {
        $subject_name=$this->input->post('subjectname');
        $fullmarks=$this->input->post('fullmarks');
        $passmarks=$this->input->post('passmarks');
        $data=array
        (
          'SubjectName'=>$subject_name,
          'StatusId'=>'1',
          'FullMarks'=>$fullmarks,
          'PassMarks'=>$passmarks
        );
        $this->db->insert('Subjects',$data);
    }
    
    function get_subjects()
    {
        $this->db->from('subjects');
        $this->db->order_by('SubjectName','asc');
        $query=$this->db->get();
        
        return $query->result();
    }
}