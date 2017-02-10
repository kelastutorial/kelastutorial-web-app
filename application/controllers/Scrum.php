<?php
class scrum extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('scrum_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['scrum'] = $this->scrum_model->get_scrum();
        
        $data['scrum_item'] = $this->scrum_model->get_scrum($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/scrum/left_sidebar');
        $this->load->view('tutorials/scrum/index', $data);
        $this->load->view('tutorials/scrum/right_sidebar');
    }
    
    public function view($slug = NULL) {
        $data['scrum_item'] = $this->scrum_model->get_scrum($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/scrum/left_sidebar');
        $this->load->view('tutorials/scrum/view', $data);
        $this->load->view('tutorials/scrum/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['scrum'] = $this->scrum_model->get_scrum();
                $this->load->view('templates/header');
                $this->load->view('tutorials/scrum/adminAllPost', $data);
		}else{
			redirect('/scrum');
		}
    }
    
    public function adminAddPost() {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $this->load->view('tutorials/scrum/adminAddPost');
                }else{
                    $this->scrum_model->set_scrum();
                    redirect('scrum/adminAllPost');
                }
		}else{
			redirect('/scrum');
		}
        
    }
    
    public function adminUpdatePost($id) {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['scrum_item'] = $this->scrum_model->get_scrum_id($id);
                    $this->load->view('tutorials/scrum/adminUpdatePost', $data);
                }else{
                    $this->scrum_model->update_scrum($id);
                    redirect('scrum/adminAllPost');
                }
		}else{
			redirect('/scrum');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->scrum_model->delete_scrum($id);
            redirect('scrum/adminAllPost');
		}else{
			redirect('/scrum');
		}
    }
}