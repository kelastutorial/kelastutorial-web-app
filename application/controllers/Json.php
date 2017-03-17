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
        $data2["meta_desc"] = "JSON adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.";
        $data2["title"] = "Tutorial JSON";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Course",
          "name": "Tutorial JSON Dasar",
          "description": "JSON adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $data['item'] = $this->json_model->get_json($slug);
        $this->load->view('templates/header', $data2);
        $this->load->view('tutorials/json/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        $data['item'] = $this->json_model->get_json($slug);
        $this->load->view('templates/header', $data);
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
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
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
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['item'] = $this->json_model->get_json_id($id);
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