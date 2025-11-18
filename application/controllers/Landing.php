<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('session');
    }

    public function index() 
    {
        $this->load->view('v_landing');
    }
}