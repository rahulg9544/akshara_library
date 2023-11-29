<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{

    public function index()
    {
        $this->load->view('public/includes/header');
        $this->load->view('public/about');
        $this->load->view('public/includes/footer');
    }
}
