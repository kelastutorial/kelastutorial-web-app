<?php
class html extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('html_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['html'] = $this->html_model->get_html();
        
        $data['html_item'] = $this->html_model->get_html($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/html/left_sidebar');
        $this->load->view('tutorials/html/index', $data);
        $this->load->view('tutorials/html/right_sidebar');
    }
    
    public function view($slug = NULL) {
        $data['html_item'] = $this->html_model->get_html($slug);
        $this->load->view('templates/header');
        $this->load->view('tutorials/html/left_sidebar');
        $this->load->view('tutorials/html/view', $data);
        $this->load->view('tutorials/html/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['html'] = $this->html_model->get_html();
                $this->load->view('templates/header');
                $this->load->view('tutorials/html/adminAllPost', $data);
		}else{
			redirect('/html');
		}
    }
    
    public function adminAddPost() {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $this->load->view('tutorials/html/adminAddPost');
                }else{
                    $this->html_model->set_html();
                    redirect('html/adminAllPost');
                }
		}else{
			redirect('/html');
		}
        
    }
    
    public function adminUpdatePost($id) {
        if ($this->session->userdata('level')=='admin') {
		        $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('content', 'Content', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['html_item'] = $this->html_model->get_html_id($id);
                    $this->load->view('tutorials/html/adminUpdatePost', $data);
                }else{
                    $this->html_model->update_html($id);
                    redirect('html/adminAllPost');
                }
		}else{
			redirect('/html');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->html_model->delete_html($id);
            redirect('html/adminAllPost');
		}else{
			redirect('/html');
		}
    }
}