<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $this->load->view('public/includes/header');
        $this->load->view('public/contact');
        $this->load->view('public/includes/footer');
    }
}
