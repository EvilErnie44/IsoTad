<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends CI_Controller {

    public function __construct() {

       parent::__construct(); 

    }

    public function index() {
        //$this->load->view('section/sectionview');
        //echo "This is the section controller"; 
    }

    public function view() {

        $this->load->model('section_model');

        $data['results'] = $this->section_model->get_sections();

        $this->load->view('section/sectionview', $data);
        

        //echo "This is the section controller"; 
    }

    public function insert(){ 

        $this->load->model('section_model');

        $standardId = 3; 
        $sectionNumber = 4; 
        $sectionTitle = "Section 4"; 
        $sectionDescription = "This is the new section four"; 

        $this->section_model->create_section([
            
            "standardId" => $standardId, 
            "sectionNumber" => $sectionNumber, 
            "sectionTitle" => $sectionTitle, 
            "sectionDescription" => $sectionDescription
            

        ]); 
    }

        public function edit() {

            $this->load->model('section_model');

            $standardId = 3; 
            $sectionNumber = 4; 
            $sectionTitle = "Section 4"; 
            $sectionDescription = "This is the updated - Standard 4";

            $this->section_model->edit_section([

                "sectionNumber" => $sectionNumber, 
                "sectionTitle" => $sectionTitle, 
                "sectionDescription" => $sectionDescription

            ],$standardId); 

        }

        public function delete() {
         $this->load->model('section_model');
        
         $standardId = 3;
         
         $this->section_model->delete_section($standardId); 
         
        }


}