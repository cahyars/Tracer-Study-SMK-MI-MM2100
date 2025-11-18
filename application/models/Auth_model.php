<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

  public function insert_login($email, $password, $role) {
    $this->db->insert('tb_login', [
      'email'     => $email,
      'password'  => $password,
      'role'      => $role
    ]);
  }

  public function get_login($email) {
    return $this->db->get_where('tb_login', ['email' => $email])->row();
  }
}
