<?php 
class Git_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_git($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('git');
            return $query->result_array();
        }
        $query = $this->db->get_where('git', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_git_id($id = FALSE) {
        $query = $this->db->get_where('git', array('id' => $id));
        return $query->row_array();
    }
    public function set_git() {
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
        return $this->db->insert('git', $data);
    }
    public function update_git($id) {
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
        return $this->db->update('git', $data);
    }
    public function delete_git($id) {
        return $this->db->delete('git', array('id' =>$id));
    }
}