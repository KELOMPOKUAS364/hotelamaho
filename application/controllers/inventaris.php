<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Minventaris');
        $this->load->helper('url');
    }

    // Halaman utama inventaris
    public function index() {
        $data['Inventaris'] = $this->Minventaris->get_all_inventaris();        
         $this->load->view('Inventaris', $data);
       
       
    }

    // Tambah data inventaris
    public function tambahinventaris() {
        $this->load->view('form_inventaris');
    }

    public function simpaninventaris() {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'kondisi' => $this->input->post('kondisi'),
    
        ];
        $this->Minventaris->add_inventaris($data);
        redirect('inventaris');
    }


    public function edit($id) {
        $data['inventaris'] = $this->Minventaris->get_by_id($id);
        $this->load->view('edit_inventaris', $data);
    }
    public function update($id) {
        $data = [
        'nama_barang' => $this->input->post('nama_barang'),
        'jumlah' => $this->input->post('jumlah'),
        'kondisi' => $this->input->post('kondisi'),
        ];
        $this->Minventaris->update($id, $data);
        redirect('inventaris');
    }

    // Hapus data inventaris
    public function delete($id) {
        $this->Minventaris->delete_inventaris($id);
        redirect('inventaris');
    }
}
