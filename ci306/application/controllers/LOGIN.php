
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller {


    $data['email']=$this->input->post('email');
    $data['pass']=$this->input->post('mdp');

    $this->load->view('Template');










}