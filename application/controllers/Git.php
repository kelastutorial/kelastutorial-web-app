<?php
class git extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('git_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['git'] = $this->git_model->get_git();
        
        $data['git_item'] = $this->git_model->get_git($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/git/left_sidebar');
        $this->load->view('tutorials/git/index', $data);
        $this->load->view('tutorials/git/right_sidebar');
    }
    
    public function view($slug = NULL) {
        $data['git_item'] = $this->git_model->get_git($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/git/left_sidebar');
        $this->load->view('tutorials/git/view', $data);
        $this->load->view('tutorials/git/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['git'] = $this->git_model->get_git();
                $this->load->view('templates/header');
                $this->load->view('tutorials/git/adminAllPost', $data);
		}else{
			redirect('/git');
		}
    }
    
    public function adminAddPost() {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $this->load->view('tutorials/git/adminAddPost');
                }else{
                    $this->git_model->set_git();
                    redirect('git/adminAllPost');
                }
		}else{
			redirect('/git');
		}
        
    }
    
    public function adminUpdatePost($id) {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['git_item'] = $this->git_model->get_git_id($id);
                    $this->load->view('tutorials/git/adminUpdatePost', $data);
                }else{
                    $this->git_model->update_git($id);
                    redirect('git/adminAllPost');
                }
		}else{
			redirect('/git');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->git_model->delete_git($id);
            redirect('git/adminAllPost');
		}else{
			redirect('/git');
		}
    }
}