<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    public function index() {
        $this->load->model('HotelModel');
        $data['rooms'] = $this->HotelModel->get_rooms();
        $this->load->view('hotel_view', $data);
    }
    
    
}
