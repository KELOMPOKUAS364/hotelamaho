<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->helper(array('url', 'form'));
    }

    // Menampilkan form Contact Us
    public function index() {
        $this->load->view('contact_form');
    }
}