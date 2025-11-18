<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('session');

        // Cek sudah login atau belum
        if ($this->session->userdata('role') != 'alumni') {
            redirect('auth/login');
        }
    }

    public function index() 
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/navbar');
        $this->load->view('alumni/v_dashboard');
        $this->load->view('layouts/footer');
    }
}