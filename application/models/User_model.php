<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    public function register($fullname,$email, $password, $phone, $address) {
        $data = array(
            'username' => $fullname,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'phone' => $phone,
            'address' => $address
        );

        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function login($email, $password) {


        $query = $this->db->get_where('users', array('email' => $email));
        $user = $query->row();

        if ($user) {
            
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }

        return false;
    }
}