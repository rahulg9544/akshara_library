<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function __construct()
	{
	    parent::__construct();		
	
        $this->load->model('book_model');
	}

    public function index()
    {

        $data['checkbox_data'] = $this->book_model->get_data();



        $data['book_list'] = $this->book_model->get_book_list();


        $this->load->view('public/includes/header');
        $this->load->view('public/book',$data);
        $this->load->view('public/includes/footer');
    }

    public function detail()
    {

      $id = $this->uri->segment(3);
   
  


        $data['book_detail'] = $this->book_model->get_book_detail($id);

        


        $this->load->view('public/includes/header');
        $this->load->view('public/books_detail',$data);
        $this->load->view('public/includes/footer');
    }

    public function get_data_ajax() 
	{
        $selectedItems = $this->input->post('selectedItems');
        $result = $this->book_model->fetchDataFromDatabase($selectedItems);
        echo json_encode($result);
    }
}
