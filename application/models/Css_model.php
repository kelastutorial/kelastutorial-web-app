<?php 
class Css_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_css($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('css');
            return $query->result_array();
        }
        $query = $this->db->get_where('css', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_css_id($id = FALSE) {
        $query = $this->db->get_where('css', array('id' => $id));
        return $query->row_array();
    }
    public function set_css() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        return $this->db->insert('css', $data);
    }
    public function update_css($id) {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        
        $this->db->where('id', $id);
        return $this->db->update('css', $data);
    }
    public function delete_css($id) {
        return $this->db->delete('css', array('id' =>$id));
    }
}