<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function index() {

        $this->load->view('public/includes/header');
        $this->load->view('public/registration');
        $this->load->view('public/includes/footer');
    }

    public function register() {


            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('username','name','trim|required');
            $this->form_validation->set_rules('email','email','trim|is_unique[users.email]|required',array('is_unique' => 'Email already registered'));
            $this->form_validation->set_rules('password','password','trim|required');
            $this->form_validation->set_rules('phone','phone','trim|required');
            $this->form_validation->set_rules('address','address','trim|required');
		
			
			if($this->form_validation->run() !== FALSE){


        $fullname = $this->input->post('username');        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');

        $this->load->model('user_model');
        $user_id = $this->user_model->register($fullname,$email, $password, $phone, $address);

        if ($user_id) {
            // Registration successful

            $messge = array('message' => 'Registration successfull please login','class' => 'alert alert-success');
            $this->session->set_flashdata('myMsj', $messge);

            // redirect('login');

            header('Location: ' . base_url() . 'login');

        } else {
            // Registration failed
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
           // redirect('signup');

            header('Location: ' . base_url() . 'signup');
        }
    }
        $this->load->view('public/includes/header');
        $this->load->view('public/registration');
        $this->load->view('public/includes/footer');

}
}