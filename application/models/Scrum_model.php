<?php 
class Scrum_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_scrum($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('scrum');
            return $query->result_array();
        }
        $query = $this->db->get_where('scrum', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_scrum_id($id = FALSE) {
        $query = $this->db->get_where('scrum', array('id' => $id));
        return $query->row_array();
    }
    public function set_scrum() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'meta_desc' => $this->input->post('meta_desc'),
            'published' => $this->input->post('published'),
            'last_update' => $this->input->post('last_update'),
            'slug' => $slug  
        );
        return $this->db->insert('scrum', $data);
    }
    public function update_scrum($id) {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'meta_desc' => $this->input->post('meta_desc'),
            'published' => $this->input->post('published'),
            'last_update' => $this->input->post('last_update'),
            'slug' => $slug  
        );
        
        $this->db->where('id', $id);
        return $this->db->update('scrum', $data);
    }
    public function delete_scrum($id) {
        return $this->db->delete('scrum', array('id' =>$id));
    }
}