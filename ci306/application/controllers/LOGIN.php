
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

        if($this->load->LOGIN->check_login($email,$pass))
        {
            $this->session->set_userdata('email',$email);
            redirect('Log/index');
        }
        else
        {
            Redirect('Page/Login');
        }
    }
}



?>