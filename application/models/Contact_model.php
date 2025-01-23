<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    // Simpan data kontak
    public function simpan_kontak($data) {
        return $this->db->insert('contact_us', $data);
    }

    // Ambil semua data kontak untuk admin
    public function get_all_kontak() {
        return $this->db->get('contact_us')->result_array();
    }
}
