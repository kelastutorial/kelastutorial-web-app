<?php 
class Git_model extends CI_Model {
    $tutorial_name = 'git';
    public function __construct() {
        $this->load->database();
    }
    public function get($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get($tutorial_name);
            return $query->result_array();
        }
        $query = $this->db->get_where($tutorial_name, array('slug' => $slug));
        return $query->row_array();
    }
    public function get_id($id = FALSE) {
        $query = $this->db->get_where($tutorial_name, array('id' => $id));
        return $query->row_array();
    }
    public function set() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),z
            'slug' => $slug  
        );
        return $this->db->insert($tutorial_name, $data);
    }
    public function update($id) {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        
        $this->db->where('id', $id);
        return $this->db->update($tutorial_name, $data);
    }
    public function delete($id) {
        return $this->db->delete($tutorial_name, array('id' =>$id));
    }
}