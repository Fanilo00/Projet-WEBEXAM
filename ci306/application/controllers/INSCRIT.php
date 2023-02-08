
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class INSCRIT extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function forminscrit()
    {
        $this->load->view('Page/Inscription');
    }
    public function Traitinscrit()
    {
        $nom=$this->input->post('nom');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');
        $repass=$this->input->post('repass');
        
        if($pass==$repass)
        {
            $this->load->model('MUser');
            $this->MUser->inscri_user($nom,$email,$pass,$repass);
            redirect('log/index');
        }
        else
        {
            redirect('inscrit/forminscrit');
        }
        
    }
}

?>
