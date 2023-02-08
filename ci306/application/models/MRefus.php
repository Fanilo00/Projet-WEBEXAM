<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class MRefus extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert_refus()
        {
            $requete = "insert into refus values (null,'$id','$idAutre','$idObj',NOW())";
            $query = $this->db->query($query);
        }
    }
?>