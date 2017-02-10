<?php 
class Json_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_json($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('json');
            return $query->result_array();
        }
        $query = $this->db->get_where('json', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_json_id($id = FALSE) {
        $query = $this->db->get_where('json', array('id' => $id));
        return $query->row_array();
    }
    public function set_json() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        return $this->db->insert('json', $data);
    }
    public function update_json($id) {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $slug  
        );
        
        $this->db->where('id', $id);
        return $this->db->update('json', $data);
    }
    public function delete_json($id) {
        return $this->db->delete('json', array('id' =>$id));
    }
}