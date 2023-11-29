<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index() {

        $this->load->view('public/includes/header');
        $this->load->view('public/login');
        $this->load->view('public/includes/footer');
    }

    public function login() {

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('email','email','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');
    
        
        if($this->form_validation->run() !== FALSE){


        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('user_model');

        $user = $this->user_model->login($email, $password);

        $this->load->library('session');

        if($user){

            $this->session->set_userdata('is_logged_in', $user);

           /* $messge = array('message' => 'Login successfull','class' => 'alert alert-success');
            $this->session->set_flashdata('myMsj', $messge);*/

            // print_r($user->role); exit;


            if(($this->session->userdata('is_logged_in')->role) == 0)
            {
                //redirect('admin/book');

                header('Location: ' . base_url() . 'admin/book');

                
            }
            else {

            //redirect('admin/category');

            header('Location: ' . base_url() . 'admin/category');

            }

        }else{

            $data["error"]="Invalid User Name or Password combination";

            $this->load->view('public/includes/header');
            $this->load->view('public/login',$data);
            $this->load->view('public/includes/footer');
        }

    }
    $this->load->view('public/includes/header');
    $this->load->view('public/login');
    $this->load->view('public/includes/footer'); 
    
    }

    public function logout()
    {
        // Destroy the session
        $this->session->sess_destroy();

        // Redirect the user to the login page
        redirect('login');
    }

}