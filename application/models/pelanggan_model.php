<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

    // Mengambil semua data pelanggan
    public function get_all_pelanggan() {
        return $this->db->get('pelanggan')->result_array();
    }

    // Menambahkan data pelanggan
    public function tambah_pelanggan($data) {
        $this->db->insert('pelanggan', $data);
    }

    // Mendapatkan data pelanggan berdasarkan ID
    public function get_pelanggan_by_id($id) {
        return $this->db->get_where('pelanggan', ['id_pelanggan' => $id])->row_array();
    }

    // Memperbarui data pelanggan
    public function update_pelanggan($id, $data) {
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $data);
    }

    // Menghapus data pelanggan
    public function delete_pelanggan($id) {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }
}
