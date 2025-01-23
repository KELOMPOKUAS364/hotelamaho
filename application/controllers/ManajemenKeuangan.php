<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManajemenKeuangan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ManajemenKeuangan_model'); // Load model lainnya jika diperlukan
    }
    

    public function index() {
        $data['keuangan'] = $this->ManajemenKeuangan_model->get_all();
        $this->load->view('manajemen_keuangan_view', $data);
    }

    public function tambah() {
        if ($this->input->method() === 'post') {
            $data = [
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_inventaris' => $this->input->post('id_inventaris'),
                'total_biaya' => $this->input->post('total_biaya'),
                'metode_pembayaran' => $this->input->post('metode_pembayaran'),
                'tanggal_transaksi' => $this->input->post('tanggal_transaksi')
            ];

            if ($this->ManajemenKeuangan_model->insert($data)) {
                $this->session->set_flashdata('message', 'Berhasil menambahkan data.');
            }
        }

        $this->load->view('tambah_keuangan_view');
    }
    
    public function simpan() {
        $id_pemesanan = $this->input->post('id_pemesanan');
    
        // Cek apakah id_pemesanan ada di tabel pemesanankamar
        $this->load->model('Pemesanankamar_model'); // Pastikan model ini ada
        $cek_pemesanan = $this->Pemesanankamar_model->cek_pemesanan($id_pemesanan);
    
        if (!$cek_pemesanan) {
            // Jika tidak ditemukan, tampilkan error
            $this->session->set_flashdata('error', 'ID Pemesanan tidak valid!');
            redirect('manajemenkeuangan/tambah');
        }
    
        // Jika valid, lanjutkan proses simpan
        $data = [
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_pemesanan' => $id_pemesanan,
            'id_inventaris' => $this->input->post('id_inventaris'),
            'total_biaya' => $this->input->post('total_biaya'),
            'metode_pembayaran' => $this->input->post('metode_pembayaran'),
            'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
        ];
    
        $this->ManajemenKeuangan_model->insert($data);
        redirect('manajemenkeuangan');
    }


    public function edit($id) {
        if ($_POST) {
            $data = [
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_inventaris' => $this->input->post('id_inventaris'),
                'total_biaya' => $this->input->post('total_biaya'),
                'metode_pembayaran' => $this->input->post('metode_pembayaran'),
                'tanggal_transaksi' => $this->input->post('tanggal_transaksi')
            ];
            $this->ManajemenKeuangan_model->update($id, $data);
            redirect('manajemenkeuangan');
        }
        $data['keuangan'] = $this->ManajemenKeuangan_model->get_by_id($id);
        $this->load->view('edit_keuangan_view', $data);
    }

    public function delete($id) {
        $this->ManajemenKeuangan_model->delete($id);
        redirect('manajemenkeuangan');
    }
}
