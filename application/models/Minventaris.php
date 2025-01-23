<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minventaris extends CI_Model {

    public function get_all_inventaris() {
        return $this->db->get('inventaris')->result_array();
    }
    
    public function get_by_id($id) {
        return $this->db->get_where('inventaris', ['id_barang' => $id])->row();
    }
    
    public function add_inventaris($data) {
        return $this->db->insert('inventaris', $data);
    }
    
    public function update($id, $data) {
        return $this->db->update('inventaris', $data, ['id_barang' => $id]);
    }
    
    public function delete_inventaris($id) {
        $this->db->where('id_barang', $id);
        return $this->db->delete('inventaris');
    }
}