<?php 
class Python_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_python($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('python');
            return $query->result_array();
        }
        $query = $this->db->get_where('python', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_python_id($id = FALSE) {
        $query = $this->db->get_where('python', array('id' => $id));
        return $query->row_array();
    }
    public function set_python() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        return $this->db->insert('python', $data);
    }
    public function update_python($id) {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        
        $this->db->where('id', $id);
        return $this->db->update('python', $data);
    }
    public function delete_python($id) {
        return $this->db->delete('python', array('id' =>$id));
    }
}