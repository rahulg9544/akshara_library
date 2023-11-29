<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function book_insert($data) {

        $this->db->insert('books', $data);
        return $this->db->insert_id();
    }

    public function addRecord($data){  
		$this->db->insert('books',$data); 
		return $this->db->insert_id(); 
	}

    public function updateRecord($data,$id)
	{ 
		$this->db->where('id', $id);
		$this->db->update('books',$data);
		return true;
	}

    public function getAllCategories()
    {
        return $this->db->get('categories')->result();
    }

	 public function getAllUsersBooks()
    {
        // Get all of the rows from the users table
		$userid=$this->session->userdata('is_logged_in')->id;
		$sql="select * from books where user_id=$userid order by id desc";
      //  $query = $this->db->order_by('id', 'DESC')->get('books');

        // Return the results of the query
        return $query->result();
    }

    public function getAllBooks()
    {
        // Get all of the rows from the users table
        $query = $this->db->order_by('id', 'DESC')->get('books');

        // Return the results of the query
        return $query->result();
    }

    public function getBookInfoById($id)
	{    
		$this->db->select('*');
		$this->db->from('books');
		$this->db->where('id', $id);
		$query = $this->db->get()->row();    
		return $query;
	}

    public function getBookById($id)
    {
        // Get the user by ID from the users table
        $query = $this->db->get_where('books', ['id' => $id]);

        // Return the result of the query
        return $query->row();
    }

    public function updateBook($id, $data)
    {
  
        $this->db->update('books', $data);
    }

    public function getImageFirstNameById($id)
{
    $this->db->select('image1');
    $this->db->from('books');
    $this->db->where('id', $id);

    $query = $this->db->get();

    return $query->row()->image1;
}

public function getImageSecondNameById($id)
{
    $this->db->select('image2');
    $this->db->from('books');
    $this->db->where('id', $id);

    $query = $this->db->get();

    return $query->row()->image1;
}

    public function deleteBook($id)
    {
        // Delete the user from the database
        $this->db->delete('books', ['id' => $id]);
    }

}