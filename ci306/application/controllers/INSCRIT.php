
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
        
        if(strcmp($pass,$repass)==true)
        {
            $this->load->User->inscri_user($nom,$email,$pass);
            Redirect('log/index');
        }
        else
        {
            Redirect('INSCRIT/forminscrit');
        }
        
    }
}

?>
