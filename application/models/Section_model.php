<?php
class Section_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();

        
    }

    public function get_section_by_id() {

    }

    public function get_sections() {
        
        $query = $this->db->get("standardsection"); 
        
        return $query->result(); 
    }

    public function create_section($data) {
        $this->db->insert("standardSection", $data);
    }

    public function edit_section($data, $id) {
        $this->db->where(["standardId" => $id]);
        $this->db->update("standardSection", $data); 
        echo "record has been updated"; 
    }

    public function delete_section($id) {
        

        $this->db->where(["standardId" => $id]);
        $this->db->delete("standardSection");

        echo "Standard ID ".$id." has been removed"; 
    
    }

}