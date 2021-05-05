<?php
  class Project extends CI_Controller {
    public function index(){
        echo "Make it wise";
    }
    function view() {
        $this->load->view('project');
    } 
    function model() {
      $this->load->model('User_model');
    }
    function login() {
      $this->load->view('loginpage');
    }
  }
   
?>