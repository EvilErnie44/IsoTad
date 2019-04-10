<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubSubSection extends CI_Controller {

    public function __construct() {

       parent::__construct(); 

    }

    public function create() {

        $this->load->model("subsubsection_model"); 

         $subSectionId = 2; 
         $subSubSectionBaseId = 3; 
         $subSubSectionNumber = 2; 


        $this->subsubsection_model->createSubSubSection([

            'subsectionid' => $subSectionId, 
            'subsubsectionBaseId' =>$subSubSectionBaseId, 
            'subsubsectionNumber' => $subSubSectionNumber
        
         ]); 
         
    }

    public function edit($subsubsectionId) {

        $this->load->model("subsubsection_model");
 
        $subSubSectionBaseId = 3; 
        $subSubSectionNumber = 4; 
        //FK must corresponde to the ID which is passed in as 
        // a param to this function. 
        $subSectionId = 3;

        $this->subsubsection_model->editSubSubSection([
            'subsubsectionBaseId'=> $subSubSectionBaseId,
            'subsubsectionNumber' => $subSubSectionNumber, 
            'subsubsectionId' => $subSectionId

        ],$subsubsectionId); 

    }

    public function delete($subsubsectionId) {

        $this->load->model("subsubsection_model"); 

        $this->subsubsection_model->deleteSubSubSection($subsubsectionId); 

    }


}