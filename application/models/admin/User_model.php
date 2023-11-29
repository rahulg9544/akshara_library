<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

   

    public function getAllUsers()
    {
        // Get all of the rows from the users table
        $query = $this->db->order_by('id', 'DESC')->get('users');

        // Return the results of the query
        return $query->result();
    }

    public function getUserById($id)
    {
        // Get the user by ID from the users table
        $query = $this->db->get_where('users', ['id' => $id]);

        // Return the result of the query
        return $query->row();
    }

    public function updateUser($data,$id)
	{ 
		$this->db->where('id', $id);
		$this->db->update('users',$data);

		return true;
	}

   

}