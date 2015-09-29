<?php 
class Insert_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function insert_record()
    {
        $this->load->database();
        $this->statusname=$_POST['status'];
       $this->db->insert('status',$this);
       return $this->db->insert_id();
    }
}