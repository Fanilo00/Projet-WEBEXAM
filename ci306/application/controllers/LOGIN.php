
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        // if(!$this->session->has_userdata('email'))
		// {
		// 	redirect('Log/index');  
		// }
		// $this->load->model('User');
    }

    public function log()
    {
        $email=$this->input->post('email');
        $pass=$this->input->post('mdp');
        $this ->load->model('MUser');
        $this ->load->model('MObjet');
       
            $this->session->set_userdata('email',$email);
            $data['Content']='Page/Home';
            $data['Objets']=$this->MObjet->get_listobjet();
            $this->load->view('Page/Index',$data);
            
      
       
           
    }
       
}



?>