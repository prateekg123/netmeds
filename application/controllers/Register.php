<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('user_model');
 }

 function index()
 {
  $this->load->view('register');
 }

 function validation()
 {
    $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('user_password', 'Password', 'required');
    if($this->form_validation->run())
    {
       $verification_key = md5(rand());
       $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
       $data = array(
        'name'  => $this->input->post('user_name'),
        'email'  => $this->input->post('user_email'),
        'password' => $encrypted_password,
       );
       $id = $this->user_model->insert($data);

       redirect('login');
    }
    else
    {
     $this->index();
    }
 }

 

}

?>