<?php
class python extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('python_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['python'] = $this->python_model->get_python();
        
        $data['python_item'] = $this->python_model->get_python($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/python/left_sidebar');
        $this->load->view('tutorials/python/index', $data);
        $this->load->view('tutorials/python/right_sidebar');
    }
    
    public function view($slug = NULL) {
        $data['python_item'] = $this->python_model->get_python($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/python/left_sidebar');
        $this->load->view('tutorials/python/view', $data);
        $this->load->view('tutorials/python/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['python'] = $this->python_model->get_python();
                $this->load->view('templates/header');
                $this->load->view('tutorials/python/adminAllPost', $data);
		}else{
			redirect('/python');
		}
    }
    
    public function adminAddPost() {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $this->load->view('tutorials/python/adminAddPost');
                }else{
                    $this->python_model->set_python();
                    redirect('python/adminAllPost');
                }
		}else{
			redirect('/python');
		}
        
    }
    
    public function adminUpdatePost($id) {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['python_item'] = $this->python_model->get_python_id($id);
                    $this->load->view('tutorials/python/adminUpdatePost', $data);
                }else{
                    $this->python_model->update_python($id);
                    redirect('python/adminAllPost');
                }
		}else{
			redirect('/python');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->python_model->delete_python($id);
            redirect('python/adminAllPost');
		}else{
			redirect('/python');
		}
    }
}