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
        $data2["meta_desc"] = "Git adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.";
        $data2["title"] = "Tutorial Git";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Course",
          "name": "Tutorial Git Dasar",
          "description": "Git adalah sebuah pengontrol versi perangkat lunak "VCS/Version Control System". Pada tutorial ini Anda akan mempelajari bagaimana menggunakan VCS Git untuk mengembangkan software dengan lebih baik.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $data['item'] = $this->git_model->get_git($slug);
        $this->load->view('templates/header', $data2);
        $this->load->view('tutorials/git/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        $data['item'] = $this->git_model->get_git($slug);
        $this->load->view('templates/header', $data);
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
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
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
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['item'] = $this->git_model->get_git_id($id);
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