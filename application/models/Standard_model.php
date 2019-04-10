<?php
class Standard_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_standard_by_id() {

    }

    public function get_standards() {
        
    }

    public function get_user_standards($userId) {

        $this->db->join('ISOStandard', 'ISOStandard.standardId = userStandard.standardId');
        $query = $this->db->get_where('userStandard', array('userId' => $userId));
        return $query->result_array();

    }

    public function get_standard_sections($standardId) {

        $query = $this->db->get_where('StandardSection', array('standardId' => $standardId));
        return $query->result_array();

    }

    public function get_standard_subsections($sectionId) {

        $query = $this->db->get_where('Subsection', array('standardSectionId' => $sectionId));
        return $query->result_array();

    }

    public function get_standard_subsubsections($subSectionId) {

        $query = $this->db->get_where('Subsubsection', array('subsectionId' => $subSectionId));
        return $query->result_array();

    }
}