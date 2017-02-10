<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
	    

		public function userCheck($data) {
			$query = $this->db->get_where('users', $data);
			return $query;
		}

	}

?>