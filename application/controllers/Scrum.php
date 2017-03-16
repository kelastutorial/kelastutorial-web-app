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
        $data2["meta_desc"] = "Scrum adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.";
        $data2["title"] = "Scrum";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Course",
          "name": "Tutorial Scrum Dasar",
          "description": "Scrum adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $data['item'] = $this->scrum_model->get_scrum($slug);
        $this->load->view('templates/header', $data2);
        $this->load->view('tutorials/scrum/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        $data['item'] = $this->scrum_model->get_scrum($slug);
        $this->load->view('templates/header', $data);
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
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
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
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['item'] = $this->scrum_model->get_scrum_id($id);
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