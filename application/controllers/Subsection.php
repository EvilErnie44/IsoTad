<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubSection extends CI_Controller {

    public function __construct() {

       parent::__construct(); 

    }


    public function create() {

        $this->load->model("subsection_model"); 

        $standardSectionId = 4; 
        $subsectionBaseId = 2; 
        $subsectionNumber = 4.1; 

        $this->subsection_model->createSubSection([

            "standardSectionId" => $standardSectionId, 
            "subsectionBaseId" => $subsectionBaseId, 
            "subsectionNumber" => $subsectionNumber
        
        ]); 
    }

    public function edit($subsectionId) {

        $this->load->model("subsection_model"); 

        $standardSectionId = 4; 
        $subsectionBaseId = 2; 
        $subsectionNumber = 1.2; 

        $this->subsection_model->editSubSection([

            "standardSectionId" => $standardSectionId, 
            "subsectionBaseId" => $subsectionBaseId, 
            "subsectionNumber" => $subsectionNumber
        
        ], $subsectionId); 
    }

    public function delete($subsectionId) {
        $this->load->model('subsection_model');
        
        $this->subsection_model->deleteSubSection($subsectionId); 
        
       }



}