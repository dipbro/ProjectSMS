<?php 
class User_registration_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function insert_record()
    {
        $this->load->database();
        $photo;
        if(isset($_POST['gender'])=="1")
        {
            $imagepath=base_url('image/DefaultMale.png');
            $photo=file_get_contents("$imagepath");
        }
        else
        {
             $imagepath=base_url('image/DefaultFemale.png');
            $photo=file_get_contents("$imagepath");
        }
        $photo=base64_encode($photo);
        $data=array();
        $address['addressname']=$_POST["address"];
        $address['statusid']="1";
        $this->db->trans_begin();
        $photostorages['photo']=$photo;
        $photostorages['statusid']="1";
        $this->db->insert('photostorages',$photostorages);
        $photoid=$this->db->insert_id();
        $this->db->insert('addresses',$address);
        $addressid=$this->db->insert_id();
        $data=array();
        $data['fullname']=$_POST['fullname'];
        $data['username']=$_POST['username'];
        $data['password']=$_POST['password'];
        $data['email']=$_POST['email'];
        $data['contactno']=$_POST['contact'];
        $data['addressid']=$addressid;
        $data['genderid']=$_POST['genders'];
        $data['photostorageid']=$photoid;
        $data['statusid']='1';
        $this->db->insert('users',$data);

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
          $this->db->trans_commit();
        }
    }
    
   
}