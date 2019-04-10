<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->load->model('user_model');

    }

	public function login()
	{

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() === FALSE) { 

            $this->load->view('templates/header');
            $this->load->view('users/login');
            $this->load->view('templates/footer');

        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->user_model->login($email, $password);

            if ($user) {

                // Create session
                $user_data = array(
                    'user_id' => $user['userId'],
                    'username' => $user['username'],
                    'user_email' => $user['userEmail'],
                    'user_level' => $user['userLevelId'],
                    'branch' => $user['branchId'],
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                redirect('standards');

            } else {
                $this->session->set_flashdata('login_failed', 'Login is invalid');

                redirect('users/login');
            }
        }
    }
    
    public function register() {

    }

    public function logout() {

            //Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('user_email');
            $this->session->unset_userdata('user_level');
            $this->session->unset_userdata('branch');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');
    }

    public function create() {

        $this->load->model("user_model");

        //FK values
        $userLevelId = 1; 
        $branchId = 3; 

        $userName = "testUser"; 
        $passWord = "testPassword";
        $fullName = "Test Person";
        $userEmail = "testpersons@test.com"; 
        $userTel = 172871574; 

        $this->user_model->create_user([

            "userLevelId" => $userLevelId, 
            "branchId"=>$branchId,
            "username" => $userName, 
            "password" => $passWord,
            "fullName" => $fullName, 
            "userEmail" => $userEmail, 
            "userTelephone"=> $userTel


        ]);
        
    }

    public function edit($id) {
        
        $this->load->model("user_model"); 

        //fk values
        $userLevelId = 1; 
        $branchId = 3; 

        $userName = "testUserNew"; 
        $passWord = "testPassword Update";
        $fullName = "Test Person Updated";
        $userEmail = "updated@test.com"; 
        $userTel = 0777555444;

        $this->user_model->edit_user([

            "userLevelId" => $userLevelId, 
            "branchId"=>$branchId,
            "username" => $userName, 
            "password" => $passWord,
            "fullName" => $fullName, 
            "userEmail" => $userEmail, 
            "userTelephone"=> $userTel

        ],$id); 

    }

    public function delete($id) {

        $this->load->model("user_model"); 

        $this->user_model->delete_user($id);

    }
}