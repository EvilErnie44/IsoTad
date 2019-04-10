<?php
class Subsubsection_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_Subsubsection_by_id() {

    }

    public function get_Subsubsections() {
        
    }

    public function createSubSubSection($data) {

        $this->db->insert("subsubsection", $data);

        echo "SubSubsection has been inserted"; 
        
    }

    public function editSubSubSection($data, $id) {

        $this->db->where(["subsubsectionId" => $id]);

        $this->db->update("subsubsection", $data); 

        echo "SubSubsection ". $id ." has been edited";
    
    }

    public function deleteSubSubSection($id) {

        $this->db->where(["subsubsectionId" => $id]);

        $this->db->delete("subsubsection"); 

        echo "SubSubsection " . $id . " has been deleted";
    }


}