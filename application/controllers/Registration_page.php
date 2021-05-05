<?php
  class Registration_page extends CI_Controller {
    public function __construct() {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->load->model('User_model');
    }
     public function index() {
       $this->load->view('Registration_view');
     }
     public function register() {
       $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
       $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
       $this->form_validation->set_rules('email', 'email ID', 'trim|required|valid_email|is_unique[users.email]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
       $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');
       if($this->form_validation->run() == FALSE) {
         //failed
         $this->index();
       }
       else {
         $data = array(
           'first_name' => $this->input->post('first_name'),
           'last_name' => $this->input->post('last_name'),
           'email' => $this->input->post('email'),
           'password' => $this->input->post('password')
         );
         $register_user = new User_model;
         $checking = $register_user->registerUser($data);
        if($checking)
        {
          $this->session-set_flashdata('status', 'Registered Successfully. ! Go to login');
        }
        else {
          $this->session->set_flashdata('status', 'Something Went Wrong.!');
          redirect(base_url());
        } 
       }
     }   
  }
?>