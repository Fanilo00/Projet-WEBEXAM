<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class MObjet extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function get_listobjet()
        {
            $requete = "select * from objet";
            $query = $this->db->query($query);
            $rs = array();

            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            };
            return false;
        }
    }
?>