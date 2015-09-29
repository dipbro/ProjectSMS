<?php 
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function check_login_form($username,$password)
    {
        $this->db->from('users');
        $this->db->where('username',$username );
        $this->db->where( 'password',$password );
        $login = $this->db->get()->result();
        $userinfo=array();
        
        if(is_array($login) && count($login)==1)
        {
            
            $this->details=$login[0];
            $userinfo['userid']=$this->details->UserId;
            $userinfo['username']=$this->details->UserName;
            $userinfo['isLoggedIn']=true;
            $this->session->set_userdata($userinfo);
            return true;
        
        }
        
        return false;
    }
    
}