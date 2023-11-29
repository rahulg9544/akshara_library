<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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

        $this->load->model('admin/user_model');
	}


    // public function index()
    // {
        
    //     // Get all of the users
    //     $categories = $this->category_model->getAllCategories();

    //     //   // Pass the users data to the view

    //     $this->load->view('admin/includes/header');
    //     $this->load->view('admin/category_list', ['categories' => $categories]);
    //     $this->load->view('admin/includes/footer');
    // }


    public function index()
    {

        

        $id = $this->session->userdata()['is_logged_in']->id;

        


        $profile = $this->user_model->getUserById($id);

        // Pass the user data to the view
        $this->load->view('admin/includes/header');
        $this->load->view('admin/profile_edit', ['profile' => $profile]);
        $this->load->view('admin/includes/footer');
    }

    public function update()
    {


        $id = $this->session->userdata()['is_logged_in']->id;

        $profile = $this->session->userdata()['is_logged_in']->id;

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('username','name','trim|required');
        $this->form_validation->set_rules('email','email','trim|required');
        // $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('phone','phone','trim|required');
        $this->form_validation->set_rules('address','address','trim|required');
    
        
        if($this->form_validation->run() !== FALSE){


        $record['id'] = $id;
        $record['username'] = $this->input->post('username');
        $record['email'] = $this->input->post('email');

        if($this->input->post('password') !="")
        {
        $record['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        }

        $record['phone'] = $this->input->post('phone');
        $record['address'] = $this->input->post('address');

        // Update the user in the database
      $response =  $this->user_model->updateUser($record,$id);


       if($response){
        
        $messge = array('message' => 'User Updated successfully','class' => 'alert alert-success');
        $this->session->set_flashdata('myMsj', $messge);
       

        header('Location: ' . base_url() . 'admin/profile');

        }

        else 
        {
            $messge = array('message' => 'Something went wrong','class' => 'alert alert-danger');
					$this->session->set_flashdata('myMsj',$messge );

                  header('Location: ' . base_url() . 'admin/profile');
        }
    }

        $this->load->view('admin/includes/header');
        $this->load->view('admin/profile_edit', ['profile' => $profile]);
        $this->load->view('admin/includes/footer');

    }

}
