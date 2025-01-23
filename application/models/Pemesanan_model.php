<?php
class Pemesanan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data pemesanan
    public function get_all_pemesanan() {
        return $this->db->get('pemesanankamar')->result_array();
    }

    // Mendapatkan data pemesanan berdasarkan ID
    public function get_pemesanan_by_id($id) {
        return $this->db->get_where('pemesanankamar', ['id_pemesanan' => $id])->row_array();
    }

    // Menambahkan data pemesanan
    public function tambah_pemesanan($data) {
        return $this->db->insert('pemesanankamar', $data);
    }

    // Mengedit data pemesanan
    public function update_pemesanan($id, $data) {
        $this->db->where('id_pemesanan', $id);
        return $this->db->update('pemesanankamar', $data);
    }

    // Menghapus data pemesanan
    public function delete_pemesanan($id) {
        $this->db->where('id_pemesanan', $id);
        return $this->db->delete('pemesanankamar');
    }
}
