<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOADHOME extends CI_Controller 
{

    public function viewHome()
    {
        $this->load->view('Page/Home');
    }
    

}
?>    