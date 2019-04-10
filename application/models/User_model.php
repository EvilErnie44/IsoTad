<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function login($email, $password) {

        $this->db->where('userEmail', $email);

        $user = $this->db->get('User');

        if($user->num_rows() == 1){
            $result = $user->row_array();
            $hashed_password = $result['password'];
            if (password_verify($password, $hashed_password)) {
                return $user->row_array();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_user_by_id() {

    }

    public function get_users() {
        
    }

    public function get_user_levels() {
        
    }

    public function create_user($data) {
       
        $this->db->insert("user" ,$data);

        echo "New " . $data["username"] . " user has been created"; 
    }

    public function edit_user($data, $id) {

        $this->db->where([ "userId" => $id ]); 

        $this->db->update("user", $data); 

        echo "User " . $id . " has been edited"; 
        
    }

    public function delete_user($id){
        $this->db->where([ "userId" => $id]);

        $this->db->delete("user"); 

        echo "User ". $id ." has been deleted"; 
    }
}