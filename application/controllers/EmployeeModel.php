<?php
class EmployeeModel extends Model {

 function EmployeeModel(){
  parent::Model(); 
 }

 function getEmployee($search){
  $this->db->select("EMPLOYEE_ID,FIRST_NAME,LAST_NAME");
  $whereCondition = array('LAST_NAME' =>$search);
  $this->db->where($whereCondition);
  $this->db->from('techincalkeeda');
  $query = $this->db->get();
  return $query->result();
 }
?>