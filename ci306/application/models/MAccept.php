<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

     class MAccept extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert_accept($id,$idAutre,$idObj)
        {
            $requete = "insert into user values(null,'%s','%s','%s',NOW())";
            $requete = sprintf($requete,$this->db->escape($id),$this->db->escape($idAutre),$this->db->escape($idObj));
            $this->db->escape($requete);
            $line = $this->db->affected_row();
            
            $conf = true;
            if($line==0)
            {
                $conf = false;
            }
            return $conf;
        }
    }
?>