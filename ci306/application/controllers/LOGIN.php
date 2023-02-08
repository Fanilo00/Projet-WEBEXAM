
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller 
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

    public function log()
    {
        $email=$this->input->post('email');
        $pass=$this->input->post('mdp');
        $this ->load->model('MUser');
        if($this->MUser->check_login($email,$pass))
        {
            $this->session->set_userdata('email',$email);
            Redirect('OBJET/getObject');
        }
        else
        {
            Redirect('Page/Login');
        }
    }
}



?>