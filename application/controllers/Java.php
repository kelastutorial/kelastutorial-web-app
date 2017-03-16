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
        $data2["meta_desc"] = "Java adalah bahasa pemrograman komputer umum general-purpose yang berbasis class dan berorientasi objek. Pada tutorial ini Anda akan mempelajari penggunaan bahasa pemrograman Java secara mendasar. Anda akan mulai belajar dari syntax dasar, tipe data, variabel, encapsulation sampai dengan level mahir.";
        $data2["title"] = "Tutorial Java";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Course",
          "name": "Tutorial Bahasa Pemrograman Java",
          "description": "Java adalah bahasa pemrograman komputer umum general-purpose yang berbasis class dan berorientasi objek. Pada tutorial ini Anda akan mempelajari penggunaan bahasa pemrograman Java secara mendasar. Anda akan mulai belajar dari syntax dasar, tipe data, variabel, encapsulation sampai dengan level mahir.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $data['item'] = $this->java_model->get_java($slug);
        $this->load->view('templates/header', $data2);
        $this->load->view('tutorials/java/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        $data['item'] = $this->java_model->get_java($slug);
        $this->load->view('templates/header', $data);
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
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
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
                $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
                $this->form_validation->set_rules('published', 'Published', 'required');
                $this->form_validation->set_rules('last_update', 'Last Update', 'required');
                
                if($this->form_validation->run() === FALSE) {
                    $data['item'] = $this->java_model->get_java_id($id);
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