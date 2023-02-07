<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class User extends CI_Model 
    {
        public function get_user()
        {
            $requete = "select * from marque";
            $query = $this->db->query($sql);
            $rs = array();

            
            foreach($query->result_array() as $row)
            {
                $rs[] = $row;
            }
            return $rs;
        }
    }
?>