<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class MAccept extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert_accept()
        {
            $requete = "insert into accept values (null,'$id','$idAutre','$idObj',NOW())";
            $query = $this->db->query($query);
        }
    }
?>