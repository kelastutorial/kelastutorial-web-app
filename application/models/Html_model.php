<?php 
class Html_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_html($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('html');
            return $query->result_array();
        }
        $query = $this->db->get_where('html', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_html_id($id = FALSE) {
        $query = $this->db->get_where('html', array('id' => $id));
        return $query->row_array();
    }
    public function set_html() {
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
        return $this->db->insert('html', $data);
    }
    public function update_html($id) {
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
        return $this->db->update('html', $data);
    }
    public function delete_html($id) {
        return $this->db->delete('html', array('id' =>$id));
    }
}