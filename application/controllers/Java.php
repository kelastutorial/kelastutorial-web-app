<?php
class java extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('java_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['java'] = $this->java_model->get_java();
        
        $data['java_item'] = $this->java_model->get_java($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/java/left_sidebar');
        $this->load->view('tutorials/java/index', $data);
        $this->load->view('tutorials/java/right_sidebar');
    }
    
    public function view($slug = NULL) {
        $data['java_item'] = $this->java_model->get_java($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/java/left_sidebar');
        $this->load->view('tutorials/java/view', $data);
        $this->load->view('tutorials/java/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['java'] = $this->java_model->get_java();
                $this->load->view('templates/header');
                $this->load->view('tutorials/java/adminAllPost', $data);
		}else{
			redirect('/java');
		}
    }
    
    public function adminAddPost() {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $this->load->view('tutorials/java/adminAddPost');
                }else{
                    $this->java_model->set_java();
                    redirect('java/adminAllPost');
                }
		}else{
			redirect('/java');
		}
        
    }
    
    public function adminUpdatePost($id) {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['java_item'] = $this->java_model->get_java_id($id);
                    $this->load->view('tutorials/java/adminUpdatePost', $data);
                }else{
                    $this->java_model->update_java($id);
                    redirect('java/adminAllPost');
                }
		}else{
			redirect('/java');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->java_model->delete_java($id);
            redirect('java/adminAllPost');
		}else{
			redirect('/java');
		}
    }
}