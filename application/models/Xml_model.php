<?php 
class Xml_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function get_xml($slug = FALSE) {
        if($slug === FALSE)  {
            $query = $this->db->get('xml');
            return $query->result_array();
        }
        $query = $this->db->get_where('xml', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_xml_id($id = FALSE) {
        $query = $this->db->get_where('xml', array('id' => $id));
        return $query->row_array();
    }
    public function set_xml() {
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
        return $this->db->insert('xml', $data);
    }
    public function update_xml($id) {
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
        return $this->db->update('xml', $data);
    }
    public function delete_xml($id) {
        return $this->db->delete('xml', array('id' =>$id));
    }
}