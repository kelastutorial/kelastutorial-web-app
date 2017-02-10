<?php 
class My404 extends CI_Controller 
{
    public function __construct() {
        parent::__construct(); 
        $this->load->helper('url_helper');
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $this->load->view('templates/header');
        $this->load->view('pages/404.php');
    } 
} 
?> 
