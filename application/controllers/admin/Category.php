<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
	{
	    parent::__construct();	
        
        // Check if the user is logged in
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login');
        }

        

		$this->load->library('form_validation');
		// $this->load->model('registration_model');
		$this->load->library('pagination'); 
		$this->load->library('upload');
        $this->load->model('admin/category_model');
	}


    // public function index()
    // {

    //     $isLoggedIn = $this->session->userdata('is_logged_in');

    //     if ($isLoggedIn === NULL) {

    //         redirect('signup');
    //     }

    //     $this->load->view('admin/includes/header');
    //     $this->load->view('admin/category_list');
    //     $this->load->view('admin/includes/footer');
    // }

    public function index()
    {
        if((!$this->session->userdata('is_logged_in')->role) == 1)

        {
          //  redirect('login');

            header('Location: ' . base_url() . 'login');
        }

        // Get all of the users
        $categories = $this->category_model->getAllCategories();

        //   // Pass the users data to the view

        $this->load->view('admin/includes/header');
        $this->load->view('admin/category_list', ['categories' => $categories]);
        $this->load->view('admin/includes/footer');
    }

    public function save()
    {
       
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');


           $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('category','category','trim|is_unique[categories.title]|required');
		
			
			if($this->form_validation->run() !== FALSE){

                $category = $this->input->post('category');

                $cat_id = $this->category_model->category_insert($category);

        if($cat_id){
            $messge = array('message' => 'Category Added successfully','class' => 'alert alert-success');
            $this->session->set_flashdata('myMsj', $messge);
           // redirect('admin/category');

            header('Location: ' . base_url() . 'admin/category');
        }else{
            $messge = array('message' => 'Something went wrong','class' => 'alert alert-danger');
            $this->session->set_flashdata('myMsj',$messge );
          //  redirect('admin/category');
          header('Location: ' . base_url() . 'admin/category');
        }

    }

    $this->load->view('admin/includes/header');
    $this->load->view('admin/category');
    $this->load->view('admin/includes/footer');
      
    }

    public function add()
    {
      
        $this->load->view('admin/includes/header');
        $this->load->view('admin/category');
        $this->load->view('admin/includes/footer');
    }

    public function edit($id)
    {


        $cat_id = $this->category_model->getCategoryById($id);

        // Pass the user data to the view
        $this->load->view('admin/includes/header');
        $this->load->view('admin/category_edit', ['cat_id' => $cat_id]);
        $this->load->view('admin/includes/footer');
    }

    public function update()
    {


        $id = $this->input->post('id');

        $cat_id = $this->category_model->getCategoryById($id);

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('title','category','trim|is_unique[categories.title]|required');
    
        
        if($this->form_validation->run() !== FALSE){


        $id = $this->input->post('id');
        $title = $this->input->post('title');

        // Update the user in the database
       $this->category_model->updateCategory($id, $title);

        
            $messge = array('message' => 'Category Updated successfully','class' => 'alert alert-success');
            $this->session->set_flashdata('myMsj', $messge);
       
        //redirect('admin/category');

        header('Location: ' . base_url() . 'admin/category');

        }

        $this->load->view('admin/includes/header');
        $this->load->view('admin/category_edit', ['cat_id' => $cat_id]);
        $this->load->view('admin/includes/footer');

    }

    public function delete($id)
    {

        $this->category_model->deleteCategory($id);

        $messge = array('message' => 'Category Deleted successfully','class' => 'alert alert-success');
        $this->session->set_flashdata('myMsj', $messge);

        //redirect('admin/category');

        header('Location: ' . base_url() . 'admin/category');
    }
}
