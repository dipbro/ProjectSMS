<?php 
class Students_registration_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function get_classes()
    {
        $this->db->from('classes');
        $query=$this->db->get();
        return $query->result();
    }
    
    function insert_data($photoid,$registered_date)
    {
        $name=$this->input->post('fullname');
        $email=$this->input->post('email');
        $address=$this->input->post('address');
        $contact=$this->input->post('contact');
        $guardianname=$this->input->post('guardianname');
        $DOB=$this->input->post('dob');
        $class=$this->input->post('class');
        $genderid=$this->input->post('genders');
        
        $this->db->trans_begin();
        $address_data=array
        (
            'AddressName'=>$address,
            'StatusId'=>'1'
        );
        $this->db->insert('addresses',$address_data);
        $addressid=$this->db->insert_id();
        
        $student_data=array(
            'StudentName'=>$name,
            'Email'=>$email,
            'Contact'=>$contact,
            'AddressId'=>$addressid,
            'GuardianName'=>$guardianname,
            'DOB'=>$DOB,
            'GenderId'=>$genderid,
            'PhotoId'=>$photoid,
            'StatusId'=>'1',
            'RegisteredDate'=>$registered_date
        );
        $this->db->insert('students',$student_data);
        $student_id=$this->db->insert_id();
        
        $student_has_class_data=array(
          'StudentId'=>$student_id,
          'ClassId'=>$class,
          'StatusId'=>'1',
          'MarkSheetStatusId'=>'2',
          'StudentStatusId'=>'1',
          'ClassRegistrationDate'=>$registered_date
        );
        
        $this->db->insert('StudentHasClass',$student_has_class_data);
        
        if ($this->db->trans_status() === FALSE)
        {
          $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }
        
    }
    
    public function convert_date($eng_date)
    {
        $this->db->select('nepdate');
        $this->db->from('tbldate');
        $this->db->where('engdate', $eng_date); 
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                return $row->nepdate;
            }
        }
    }
    
     function delete($student_has_class_id)
    {
        $data=array
        (
          'StatusId'=>'2'  
        );
        
        $this->db->where('StudentHasClassId',$student_has_class_id);
        $this->db->update('StudentHasClass',$data);
    }
    
}