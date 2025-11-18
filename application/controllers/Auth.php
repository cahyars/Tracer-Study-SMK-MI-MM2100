<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Auth_model');
    $this->load->library('session');
  }

  // Fungsi untuk Login ke sistem
  public function login() {
    // Cek apakah sudah login
    if ($this->session->userdata('role')) {
        $role = $this->session->userdata('role');
        if ($role == 'admin') {
            redirect('admin');
        } elseif ($role == 'alumni') {
            redirect('alumni');
        }
    }

    if ($this->input->post()) {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');
      
      $user = $this->Auth_model->get_login($email);
      if ($user && password_verify($password, $user->password)) {
        // Simpan session
        $this->session->set_userdata([
          'email' => $user->email,
          'nama' => $user->nama,
          'role' => $user->role
        ]);
        
        // Redirect sesuai role
        if ($user->role == 'admin') {
          redirect('admin');
        } elseif ($user->role == 'alumni') {
          redirect('alumni');
        } else {
          echo "Role tidak dikenali";
        }
      } else {
        echo "Login gagal";
      }
    } else {
      $this->load->view('auth/v_login');
    }
  }

  public function register() {
    // Ini untuk ambil data dari Form Register
    if ($this->input->post()) {
      $email        = $this->input->post('email');
      $password     = $this->input->post('password');
      $nama         = $this->input->post('nama');
      
      // Cek apakah Email sudah terdaftar
      $existing = $this->db->get_where('tb_login', ['email' => $email])->row();
      if ($existing) {
        $this->session->set_flashdata('error', 'Email sudah terdaftar. Silakan gunakan Email lain.');
        redirect('auth/register');
      }
      
      // Simpan ke tb_login
      $data_login = [
        'nama'      => $nama,
        'email'     => $email,
        'password'  => password_hash($password, PASSWORD_DEFAULT),
        'role'      => 'alumni'
      ];
      $this->db->insert('tb_login', $data_login);      
      // Setelah Register berhasil, alihkan ke halaman Login
      redirect('auth/login');
    } else {
      $this->load->view('auth/v_register');
    }
  }

  // Fungsi untuk Logout dari sistem
  public function logout() {
		$this->session->sess_destroy();
		redirect('auth/login');
	}

}
