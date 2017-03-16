<?php
class xml extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('xml_model');
        $this->load->helper('url_helper');
		$this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index($slug = NULL) {
        $data['xml'] = $this->xml_model->get_xml();
        $data2["meta_desc"] = "XML adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.";
        $data2["title"] = "XML";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Course",
          "name": "Tutorial XML Dasar",
          "description": "XML adalah sebuah standar bahasa markup untuk membuat sebuah halaman web. Pada tutorial ini Anda akan mempelajari bagaimana membuat website modern mulai dari syntax dasar, elemen-elemen, layout sampai dengan design responsive.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $data['item'] = $this->xml_model->get_xml($slug);
        $this->load->view('templates/header', $data2);
        $this->load->view('tutorials/xml/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        $data['item'] = $this->xml_model->get_xml($slug);
        $this->load->view('templates/header', $data);
        $this->load->view('tutorials/xml/left_sidebar');
        $this->load->view('tutorials/xml/view', $data);
        $this->load->view('tutorials/xml/right_sidebar');
    }
    
    public function adminAllPost() {
         if ($this->session->userdata('level')=='admin') {
		        $data['xml'] = $this->xml_model->get_xml();
                $this->load->view('templates/header');
                $this->load->view('tutorials/xml/adminAllPost', $data);
		}else{
			redirect('/xml');
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
                    $this->load->view('tutorials/xml/adminAddPost');
                }else{
                    $this->xml_model->set_xml();
                    redirect('xml/adminAllPost');
                }
		}else{
			redirect('/xml');
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
                    $data['item'] = $this->xml_model->get_xml_id($id);
                    $this->load->view('tutorials/xml/adminUpdatePost', $data);
                }else{
                    $this->xml_model->update_xml($id);
                    redirect('xml/adminAllPost');
                }
		}else{
			redirect('/xml');
		}
        
    }
    
    public function adminDeletePost($id) {
        if ($this->session->userdata('level')=='admin') {
            $this->xml_model->delete_xml($id);
            redirect('xml/adminAllPost');
		}else{
			redirect('/xml');
		}
    }
}