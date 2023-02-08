<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class MUser extends CI_Model 
    {
        public function __construct()
        {
        parent::__construct();
       
        // if(!$this->session->has_userdata('email'))
		// {
		// 	redirect('welcome/index');  
		// }
		// $this->load->model('Model');
        // }

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

        public function inscri_user($nom,$email,$pass)
        {
            $requete = "insert into user values(null,'%s','%s','%s',0)";
            $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($email),$this->db->escape($pass));
            $this->db->escape($requete);
            $line = $this->db->affected_row();
            $conf = true;
            if($line==0)
            {
                $conf = false;
            }
            return $conf;
        }

        public function inscri_admin($nom,$email,$pass)
        {
            $requete = "insert into user values(null,'$nom','$email','$pass',1)";
            $query = $this->db->query($requete);
        }
        
    }
?>  