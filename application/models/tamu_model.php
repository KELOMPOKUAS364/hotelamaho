<?php
class Tamu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mengambil semua data tamu
    public function get_all_tamu() {
        $this->db->select('tamu.*, pelanggan.nama_pelanggan');
        $this->db->from('tamu');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = tamu.id_pelanggan', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Menambahkan data tamu
    public function tambah_tamu($data) {
        return $this->db->insert('tamu', $data);
    }

    // Mengambil data tamu berdasarkan ID
    public function get_tamu_by_id($id) {
        $this->db->where('id_tamu', $id);
        $query = $this->db->get('tamu');
        return $query->row_array();
    }

    // Mengupdate data tamu berdasarkan ID
    public function update_tamu($id, $data) {
        $this->db->where('id_tamu', $id);
        return $this->db->update('tamu', $data);
    }

    // Menghapus data tamu berdasarkan ID
    public function delete_tamu($id) {
        $this->db->where('id_tamu', $id);
        return $this->db->delete('tamu');
    }

    // Mengambil tamu berdasarkan ID pelanggan
    public function get_tamu_by_pelanggan($id_pelanggan) {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $query = $this->db->get('tamu');
        return $query->result_array();
    }
}
