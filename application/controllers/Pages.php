<?php
class Pages extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }
    
    #Home page
    public function index() {
        $this->load->view('templates/header-home');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
    
    #Search result
    public function search() {
        $this->load->view('templates/header');
        $this->load->view('pages/search');
        $this->load->view('templates/footer');
    }
    
    
    #Static page
    public function about() {
        $data2["meta_desc"] = "Kelas Tutorial adalah situs edukasi dengan misi untuk menyediakan pendidikan gratis dengan perpustakaan tutorial dalam bahasa Indonesia.";
        $data2["title"] = "About";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebSite",
          "name": "Kelastutorial",
          "description": "Kelas Tutorial adalah situs edukasi dengan misi untuk menyediakan pendidikan gratis dengan perpustakaan tutorial dalam bahasa Indonesia.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $this->load->view('templates/header', $data2);
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
    }
    public function contact() {
        $this->load->view('templates/header');
        $this->load->view('pages/contact');
        $this->load->view('templates/footer');
    }
    public function site_terms() {
        $data2["meta_desc"] = "Terima kasih telah menggunakan produk dan layanan Kelastutorial. Dengan menggunakan Layanan kami, berarti Anda menyetujui persyaratan ini. Bacalah dengan saksama.";
        $data2["title"] = "Syarat dan Ketentuan";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebSite",
          "name": "Kelastutorial",
          "description": "Kelas Tutorial adalah situs edukasi dengan misi untuk menyediakan pendidikan gratis dengan perpustakaan tutorial dalam bahasa Indonesia.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $this->load->view('templates/header', $data2);
        $this->load->view('pages/site_terms');
        $this->load->view('templates/footer');
    }
    public function privacy_policy() {
        $data2["meta_desc"] = "Privasi Anda sangatlah penting. Ini adalah kebijakan Kelastutorial untuk menghormati privasi Anda mengenai informasi yang kami dapat mengumpulkan sementara operasi website kami. Dengan demikian, kami telah mengembangkan kebijakan privasi ini agar Anda memahami bagaimana kami mengumpulkan, menggunakan, berkomunikasi, membuka dan memanfaatkan informasi pribadi.";
        $data2["title"] = "Kebijakan Privasi";
        $data2["structured_data"] = '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebSite",
          "name": "Kelastutorial",
          "description": "Kelas Tutorial adalah situs edukasi dengan misi untuk menyediakan pendidikan gratis dengan perpustakaan tutorial dalam bahasa Indonesia.",
          "provider": {
            "@type": "Organization",
            "name": "Kelastutorial Instructor",
            "sameAs": "https://kelastutorial.com"
          }
        }
        </script>
        ';
        $this->load->view('templates/header', $data2);
        $this->load->view('pages/privacy_policy');
        $this->load->view('templates/footer');
    }
    public function program() {
        $this->load->view('templates/header');
        $this->load->view('pages/program');
        $this->load->view('templates/footer');
    }
    public function partner() {
        $this->load->view('templates/header');
        $this->load->view('pages/partner');
        $this->load->view('templates/footer');
    }
    public function referensi() {
        $this->load->view('templates/header');
        $this->load->view('pages/referensi');
        $this->load->view('templates/footer');
    }
    public function laporkan_isu() {
        $this->load->view('templates/header');
        $this->load->view('pages/laporkan_isu');
        $this->load->view('templates/footer');
    }
    public function donasi() {
        $this->load->view('templates/header');
        $this->load->view('pages/donasi');
        $this->load->view('templates/footer');
    }
    public function event() {
        $this->load->view('templates/header');
        $this->load->view('pages/event');
        $this->load->view('templates/footer');
    }
    
    
    public function view($page = 'test') {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
        
        $data['title'] = $page;
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
    }
    
    
    public function tutorials() {
        $this->load->view('templates/header');
        $this->load->view('pages/tutorials');
        $this->load->view('templates/footer');
    }
}