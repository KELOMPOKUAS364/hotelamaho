<?php
class Pemesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pemesanan_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation', 'session']);
    }

    // Menampilkan semua data pemesanan
    public function index() {
        $data['pemesanankamar'] = $this->Pemesanan_model->get_all_pemesanan();
        $this->load->view('pemesanan', $data);
    }

    // Menambahkan pemesanan
    public function tambah() {
        $this->form_validation->set_rules('id_pelanggan', 'ID Pelanggan', 'required');
        $this->form_validation->set_rules('id_kamar', 'ID Kamar', 'required');
        $this->form_validation->set_rules('tanggal_pemesanan', 'Tanggal Pemesanan', 'required');
        $this->form_validation->set_rules('tanggal_checkin', 'Tanggal Check-In', 'required');
        $this->form_validation->set_rules('tanggal_checkout', 'Tanggal Check-Out', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pemesanan_tambah');
        } else {
            $data = [
                'id_pemesanan'      => uniqid('PSN'), // Tambahkan ID Pemesanan dengan format unik
                'id_pelanggan'      => $this->input->post('id_pelanggan'),
                'id_kamar'          => $this->input->post('id_kamar'),
                'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
                'tanggal_checkin'   => $this->input->post('tanggal_checkin'),
                'tanggal_checkout'  => $this->input->post('tanggal_checkout'),
                'status'            => $this->input->post('status'),
            ];

            $this->Pemesanan_model->tambah_pemesanan($data);
            $this->session->set_flashdata('message', 'Pemesanan berhasil ditambahkan.');
            redirect('pemesanan');
        }
    }

    public function edit($id) {
        // Get pemesanan data by ID
        $data['pemesanankamar'] = $this->Pemesanan_model->get_pemesanan_by_id($id);
    
        // If no pemesanan found, redirect with an error message
        if (!$data['pemesanankamar']) {
            $this->session->set_flashdata('error', 'Data pemesanan tidak ditemukan.');
            redirect('pemesanan');
        }
    
        // Set validation rules
        $this->form_validation->set_rules('id_pelanggan', 'ID Pelanggan', 'required');
        $this->form_validation->set_rules('id_kamar', 'ID Kamar', 'required'); 
        $this->form_validation->set_rules('tanggal_checkin', 'Tanggal Check-In', 'required');
        $this->form_validation->set_rules('tanggal_checkout', 'Tanggal Check-Out', 'required');
    
        // Check if form is validated
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the edit form with existing data
            $this->load->view('pemesanan_edit', $data);
        } else {
            // Prepare the update data
            $update_data = [
                'id_pelanggan'      => $this->input->post('id_pelanggan'),
                'id_kamar'          => $this->input->post('id_kamar'),
                'tanggal_checkin'   => $this->input->post('tanggal_checkin'),
                'tanggal_checkout'  => $this->input->post('tanggal_checkout'),
                'status'            => $this->input->post('status'),
            ];
    
            // Call the model to update the data
            $this->Pemesanan_model->update_pemesanan($id, $update_data);
    
            // Set a success message
            $this->session->set_flashdata('message', 'Pemesanan berhasil diperbarui.');
            redirect('pemesanan');
        }
    }

    // Menghapus pemesanan
    public function delete($id) {
        $this->Pemesanan_model->delete_pemesanan($id);
        $this->session->set_flashdata('message', 'Pemesanan berhasil dihapus.');
        redirect('pemesanan');
    }
}