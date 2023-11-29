<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function get_category() {

        $this->db->select('MIN(cat_id) AS category_id, books.id, books.book_name, books.image1, books.image2, books.description');
        $this->db->from('books');
        $this->db->join('categories', 'books.cat_id = categories.id');
        $this->db->group_by('cat_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }


    public function get_new_release() {
        $this->db->select('*');
        $this->db->from('books');
        $this->db->where('new_release', 1);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_featured() {

        $this->db->select('*');
        $this->db->from('books');
        $this->db->where('featured', 1);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}