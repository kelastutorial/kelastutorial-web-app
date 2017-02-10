<?php 
class Java_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_java($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('java');
            return $query->result_array();
        }
        $query = $this->db->get_where('java', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_java_id($id = FALSE) {
        $query = $this->db->get_where('java', array('id' => $id));
        return $query->row_array();
    }
    public function set_java() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        return $this->db->insert('java', $data);
    }
    public function update_java($id) {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        
        $this->db->where('id', $id);
        return $this->db->update('java', $data);
    }
    public function delete_java($id) {
        return $this->db->delete('java', array('id' =>$id));
    }
}