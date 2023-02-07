
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
        $nom=$this->input->post('nom');
        $email=$this->input->post('email');
        $pass=$this->input->post('mdp');
        $this->load->User->inscri_user($nom,$email,$pass);
        $this->load->view('Page/Login');
    }
}

?>
