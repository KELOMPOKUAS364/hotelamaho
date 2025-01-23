<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManajemenKeuangan_model extends CI_Model {
    public function get_all() {
        return $this->db->get('manajemenkeuangan')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('manajemenkeuangan', ['id_transaksi' => $id])->row_array();
    }

    public function insert($data) {
        $this->db->where('id_transaksi');
        $this->db->insert('manajemenkeuangan', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_transaksi', $id);
        $this->db->update('manajemenkeuangan', $data);
    }

    public function delete($id) {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('manajemenkeuangan');
    }
    public function cek_pemesanan($id_pemesanan) {
        return $this->db->get_where('pemesanankamar', ['id_pemesanan' => $id_pemesanan])->row_array();
    }
    
}
