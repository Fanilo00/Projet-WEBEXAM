<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class User extends CI_Model 
    {
        public function __construct()
        {
        parent::__construct();
       
        if(!$this->session->has_userdata('email'))
		{
			redirect('welcome/index');  
		}
		$this->load->model('Model');
        }

        public function check_Login($email,$pass)
        {
            $requete = "select * from user";
            $query = $this->db->query($requete);
            $rs = array();

            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            }
            for($i=0;$i<count($rs);$i)
            {
                if(strcmp($rs[$i]['Email'],$email)==true && strcmp($rs[$i]['Pwd'],$pass)==true)
                {
                        return true;
                }   
            }
            return false;
        }
        
    }
?>