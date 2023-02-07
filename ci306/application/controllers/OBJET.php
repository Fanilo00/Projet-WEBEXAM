<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OBJET extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('email'))
		{
			redirect('Log/index');  
		}
		$this->load->model('User');
    }

}


?>