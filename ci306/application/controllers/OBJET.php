<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OBJET extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
       
    }

    public function getObject()
    {
        $this->load->model('MObjet');
        $data['Objets']=$this->MObjet->get_listobjet();
        $data['Content']='Page/Home';
        $this->load->view('Page/Index',$data);
    }
   

} 


?>