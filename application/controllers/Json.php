<?php
class json extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('json_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['json'] = $this->json_model->get_json();
        
        $data['json_item'] = $this->json_model->get_json($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/json/left_sidebar');
        $this->load->view('tutorials/json/index', $data);
        $this->load->view('tutorials/json/right_sidebar');
    }
    
    public function view($slug = NULL) {
        $data['json_item'] = $this->json_model->get_json($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/json/left_sidebar');
        $this->load->view('tutorials/json/view', $data);
        $this->load->view('tutorials/json/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['json'] = $this->json_model->get_json();
                $this->load->view('templates/header');
                $this->load->view('tutorials/json/adminAllPost', $data);
		}else{
			redirect('/json');
		}
    }
    
    public function adminAddPost() {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $this->load->view('tutorials/json/adminAddPost');
                }else{
                    $this->json_model->set_json();
                    redirect('json/adminAllPost');
                }
		}else{
			redirect('/json');
		}
        
    }
    
    public function adminUpdatePost($id) {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['json_item'] = $this->json_model->get_json_id($id);
                    $this->load->view('tutorials/json/adminUpdatePost', $data);
                }else{
                    $this->json_model->update_json($id);
                    redirect('json/adminAllPost');
                }
		}else{
			redirect('/json');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->json_model->delete_json($id);
            redirect('json/adminAllPost');
		}else{
			redirect('/json');
		}
    }
}