<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Standards extends CI_Controller {

    public function __construct()
    {
            parent::__construct();

            // if(!$this->session->userdata('logged_in')){
            //     redirect('users/login');
            // }
            
            $this->load->model('standard_model');
    }

    public function index() {

        $userId = 2;

        $data['standards'] = $this->standard_model->get_user_standards($userId);

        if (!empty($data['standards'])) {
            foreach ($data['standards'] as &$standard) {
                $standard['sections'] = $this->standard_model->get_standard_sections($standard['standardId']);

                foreach ($standard['sections'] as &$section) {
                    $section['subsections'] = $this->standard_model->get_standard_subsections($section['standardSectionId']);

                    foreach ($section['subsections'] as &$subsection) {
                        $subsection['subsubsections'] = $this->standard_model->get_standard_subsubsections($subsection['subsectionId']);

                    }
                }
            }
        }

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('standards/index', $data);
        $this->load->view('templates/footer');
    }

}