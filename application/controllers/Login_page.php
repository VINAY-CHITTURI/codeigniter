<?php
  class Login_page extends CI_Controller {
    function index() {
        $this->load->view('login_page');
    } 
    public function process() {
      $user = $this->input->post('username');
    }
}
?>