<?php
class checkinout_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan semua data check-in/check-out
    public function get_all_cekinout() {
        $query = $this->db->get('checkinout');
        return $query->result_array();
    }

    // Memproses check-in
    public function process_checkin($data) {
        return $this->db->insert('checkinout', $data);
    }

    // Memproses check-out
    public function process_checkout($data) {
        $this->db->where('id_pemesanan', $data['id_pemesanan']);
        return $this->db->update('checkinout', [
            'tanggal_checkout' => $data['tanggal_checkout']
        ]);
    }

    // Menghapus data check-in/check-out berdasarkan ID
    public function delete_cekinout($id) {
        $this->db->where('id', $id);
        return $this->db->delete('checkinout');
    }
}
