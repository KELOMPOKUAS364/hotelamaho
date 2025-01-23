<?php
class Tamu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tamu_model');
        $this->load->model('Pelanggan_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation', 'session']);
    }

    // Menampilkan daftar tamu
    public function index() {
        // Ambil data tamu dari model
        $data['tamu'] = $this->Tamu_model->get_all_tamu();
        $this->load->view('tamu', $data);  // Pastikan ini memanggil tampilan 'tamu.php'
    }

    // Menambahkan tamu
    public function tambah() {
        $this->form_validation->set_rules('id_pelanggan', 'Pelanggan', 'required');
        $this->form_validation->set_rules('nama_tamu', 'Nama Tamu', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['pelanggan'] = $this->Pelanggan_model->get_all_pelanggan();  // Menampilkan daftar pelanggan
            $this->load->view('tamu_tambah', $data);
        } else {
            $data = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'nama_tamu'    => $this->input->post('nama_tamu'),
                'telepon'      => $this->input->post('telepon'),
            ];

            $this->Tamu_model->tambah_tamu($data);
            $this->session->set_flashdata('message', 'Tamu berhasil ditambahkan.');
            redirect('tamu');
        }
    }

    // Mengedit data tamu
    public function edit($id) {
        $data['tamu'] = $this->Tamu_model->get_tamu_by_id($id);
        
        // Jika data tamu tidak ditemukan, redirect dengan pesan error
        if (!$data['tamu']) {
            $this->session->set_flashdata('error', 'Data tamu tidak ditemukan.');
            redirect('tamu');
        }

        // Menampilkan daftar pelanggan untuk dipilih
        $data['pelanggan'] = $this->Pelanggan_model->get_all_pelanggan();

        $this->form_validation->set_rules('id_pelanggan', 'Pelanggan', 'required');
        $this->form_validation->set_rules('nama_tamu', 'Nama Tamu', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
       
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tamu_edit', $data);
        } else {
            $update_data = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'nama_tamu'    => $this->input->post('nama_tamu'),
                'telepon'      => $this->input->post('telepon'),
            ];

            $this->Tamu_model->update_tamu($id, $update_data);
            $this->session->set_flashdata('message', 'Tamu berhasil diperbarui.');
            redirect('tamu');
        }
    }

    // Menghapus data tamu
    public function delete($id) {
        $this->Tamu_model->delete_tamu($id);
        $this->session->set_flashdata('message', 'Tamu berhasil dihapus.');
        redirect('tamu');
    }
}
