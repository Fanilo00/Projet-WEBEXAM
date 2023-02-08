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
        public function get_objetuser($categorie)
        {
            $requete = "select * from objet_user where categorie ='$categorie'";
            $query = $this->db->query($query);
            $rs = array();

            foreach($query->result_array() as $row)
            {
                $rs[]=$row;
            };
            return $rs;
        }
        public function find()
        {
            $requete = "select * from objet_user where descri like "%'%s'%" and categorie like "%'%s'%"";
            $query = $this->db->query($query);
        }
    }
?>