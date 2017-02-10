<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

	public function index() {
	    
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->view('login/index');
	}

	public function loginCheck() {
		$data = array(
		            'username' => $this->input->post('username', TRUE),
		            'password' => md5($this->input->post('password', TRUE))
		        );
		$this->load->model('user_model');
		$result = $this->user_model->userCheck($data);
		if($result->num_rows() == 1) {
		    foreach($result->result() as $sess) {
		        $sess_data['logged_in'] = "Already Login";
		        $sess_data['id'] = $sess->id;
		        $sess_data['username'] = $sess->username;
		        $sess_data['level'] = $sess->level;
		        $this->session->set_userdata($sess_data);
		    }
		    if ($this->session->userdata('level')=='admin') {
				redirect('dashboard');
			}
			elseif ($this->session->userdata('level')=='member') {
				redirect('dashboard');
			}
		}
		else {
			echo "login failed";
		}
	}

}

?>