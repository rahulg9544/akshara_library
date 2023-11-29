<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function category_insert($category) {
        $data = array(
            'title' => $category,
        );

        $this->db->insert('categories', $data);
        return $this->db->insert_id();
    }

    public function getAllCategories()
    {
        // Get all of the rows from the users table
        $query = $this->db->order_by('id', 'DESC')->get('categories');

        // Return the results of the query
        return $query->result();
    }

    public function getCategoryById($id)
    {
        // Get the user by ID from the users table
        $query = $this->db->get_where('categories', ['id' => $id]);

        // Return the result of the query
        return $query->row();
    }

    public function updateCategory($id, $title)
    {
        // Update the user in the users table
        $data = [
            'title' => $title
        ];

        $this->db->update('categories', $data, ['id' => $id]);
        
        $affected_rows = $this->db->affected_rows();

    }

    public function deleteCategory($id)
    {
        // Delete the user from the database
        $this->db->delete('categories', ['id' => $id]);
    }

}