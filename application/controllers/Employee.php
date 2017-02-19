<?php
class Employee extends Controller {

 function Employee(){
  parent::Controller();
  $this->load->model('EmployeeModel');
 }

 public function index(){
  $search=  $this->input->post('search');
  $query = $this->EmployeeModel->getEmployee($search);
  echo json_encode ($query);
 }
}
?>
