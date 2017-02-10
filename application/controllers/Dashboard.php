<?php

class Dashboard extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('text');
        }

        public function index()
        {       
                if ($this->session->userdata('level')=='admin') {
			$data['username'] = $this->session->userdata('username');
			$this->load->view('dashboard/admin', $data);
                }elseif ($this->session->userdata('level')=='member') {
        		$data['username'] = $this->session->userdata('username');
        		$this->load->view('dashboard/member', $data);
		}else{
			redirect('login');
		}
        }
        
        public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		#session_destroy();
		redirect('login');
	}

        public function image_upload()
        {       
                if ($this->session->userdata('level')=='admin') {
		        $this->load->view('dashboard/image_upload', array('error' => ' ' ));
		}else{
			redirect('/');
		}
                
        }

        public function do_image_upload()
        {
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('dashboard/image_upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('dashboard/image_upload', $data);
                }
        }
}
?>