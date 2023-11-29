<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function get_data() {
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }


    public function get_book_list() {
        $this->db->select('*');
        $this->db->from('books');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_book_detail($id) {
        $this->db->select('*');
        $this->db->from('books');
        $this->db->where('id', $id);
        $query = $this->db->get();


        $this->db->select('b.book_name, b.image1, b.image2, b.description, b.availability, u.username, u.email, u.phone,u.address');
$this->db->from('books b');
$this->db->join('users u', 'b.user_id = u.id', 'inner');
$this->db->where('b.id', $id);
$query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function fetchDataFromDatabase($selectedItems) {
        // Fetch data based on selected items from the database

        $this->db->select('*');
        $this->db->from('books');
        $this->db->where_in('cat_id', $selectedItems);
        $query = $this->db->get();

        // echo $this->db->last_query();


       // log_message('debug', 'Generated SQL query: ' . $this->db->last_query());

        return $query->result();
    }
}