<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelModel extends CI_Model {

 // Data kamar
    public function get_rooms() {
        return [
            [
                'type' => 'Executive Room',
                'price' => '500',
                'image' => 'executive.jpg'
            ],
            [
                'type' => 'Deluxe Room',
                'price' => '300',
                'image' => 'deluxe.jpg'
            ],

            [
                'type' => 'Junior Room',
                'price' => '150',
                'image' => 'junior.jpg'
            ]
        ];
    }
    
    
}
