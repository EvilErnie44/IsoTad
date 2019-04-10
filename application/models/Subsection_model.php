<?php
class Subsection_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_subsection_by_id() {

    }

    public function get_Subsections() {
        
    }

    public function createSubSection($data) {

        $this->db->insert("subsection", $data);

        echo "Subsection has been inserted"; 
        
    }

    public function editSubSection($data, $id) {

        $this->db->where(["subsectionId" => $id]); 

        $this->db->update("subsection", $data);

        echo "Subsection has been edited";
    
    }



        public function deleteSubSection($id) {
        

            $this->db->where(["subsectionId" => $id]);
            $this->db->delete("subsection");
    
            echo "Subsection ".$id." has been removed"; 
        
        }


}