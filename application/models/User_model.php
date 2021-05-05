<?php
  class User_model extends CI_Model {
      public function return_users($data) {
        return $this->db->insert('users', $data);
      }
  }
?>