<?php
class Employee extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('employeeModel');
        $this->load->helper('url_helper');
      		$this->load->library('session');
        $this->load->library('form_validation');
    }

 public function index(){
  $search=  $this->input->post('search');
  $query = $this->EmployeeModel->getEmployee($search);
  echo json_encode ($query);
 }
}
?>
