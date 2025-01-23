<?php
class Pelanggan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation', 'session']);
    }

    // Menampilkan semua data pelanggan
    public function index() {
        $data['pelanggan'] = $this->Pelanggan_model->get_all_pelanggan();
        $this->load->view('pelanggan', $data);
    }

    // Menambahkan pelanggan
    public function tambah() {
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pelanggan_tambah');
        } else {
            $data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'email'          => $this->input->post('email'),
                'telepon'        => $this->input->post('telepon'),
                'alamat'         => $this->input->post('alamat'),
            ];

            $this->Pelanggan_model->tambah_pelanggan($data);
            $this->session->set_flashdata('message', 'Pelanggan berhasil ditambahkan.');
            redirect('pelanggan');
        }
    }

    // Mengedit data pelanggan
    public function edit($id) {
        // Get pelanggan data by ID
        $data['pelanggan'] = $this->Pelanggan_model->get_pelanggan_by_id($id);
    
        // If no pelanggan found, redirect with an error message
        if (!$data['pelanggan']) {
            $this->session->set_flashdata('error', 'Data pelanggan tidak ditemukan.');
            redirect('pelanggan');
        }
    
        // Set validation rules
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    
        // Check if form is validated
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the edit form with existing data
            $this->load->view('pelanggan_edit', $data);
        } else {
            // Prepare the update data
            $update_data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'email'          => $this->input->post('email'),
                'telepon'        => $this->input->post('telepon'),
                'alamat'         => $this->input->post('alamat'),
            ];
    
            // Call the model to update the data
            $this->Pelanggan_model->update_pelanggan($id, $update_data);
    
            // Set a success message
            $this->session->set_flashdata('message', 'Pelanggan berhasil diperbarui.');
            redirect('pelanggan');
        }
    }

    // Menghapus data pelanggan
    public function delete($id) {
        $this->Pelanggan_model->delete_pelanggan($id);
        $this->session->set_flashdata('message', 'Pelanggan berhasil dihapus.');
        redirect('pelanggan');
    }
}
