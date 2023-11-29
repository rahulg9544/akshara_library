<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{
   

    public function __construct()
	{
	    parent::__construct();		

        if (!$this->session->userdata('is_logged_in')) {
            redirect('login');
        }
        

        $this->load->model('admin/user_model');
	}

    public function index()
    {
        if((!$this->session->userdata('is_logged_in')->role) == 1)

        {
           // redirect('login');

            header('Location: ' . base_url() . 'login');
        }

        // Get all of the users
        $user = $this->user_model->getAllUsers();

        //   // Pass the users data to the view

        $this->load->view('admin/includes/header');
        $this->load->view('admin/user_list', ['user' => $user]);
        $this->load->view('admin/includes/footer');
    }

    
}
