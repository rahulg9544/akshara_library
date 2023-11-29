<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
	{
	    parent::__construct();		
       
        $this->load->model('home_model');
	}

    public function index()
    {

        $data['special_category'] =  $this->home_model->get_category();

        $data['new_release'] =  $this->home_model->get_new_release();

        $data['featured'] =  $this->home_model->get_featured();

        $this->load->view('public/includes/header');
        $this->load->view('public/home',$data);
        $this->load->view('public/includes/footer');
    }
}
