<?php
class Checkinout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('checkinout_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation', 'session']);
    }

    // Menampilkan semua data check-in/check-out
    public function index() {
        $data['checkinout'] = $this->checkinout_model->get_all_cekinout();
        $this->load->view('checkinout', $data);
    }

    // Proses Check-In
    public function checkin() {
        $this->form_validation->set_rules('id_checkinout', 'ID Check-In/Out', 'required');
        $this->form_validation->set_rules('id_pemesanan', 'ID Pemesanan', 'required');
        $this->form_validation->set_rules('tanggal_checkin', 'Tanggal Check-In', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('checkin_form');
        } else {
            $data = [
                'id_checkinout'   => $this->input->post('id_checkinout'),
                'id_pemesanan'    => $this->input->post('id_pemesanan'),
                'tanggal_checkin' => $this->input->post('tanggal_checkin'),
            ];

            $this->checkinout_model->process_checkin($data);
            $this->session->set_flashdata('message', 'Check-In berhasil.');
            redirect('checkinout');
        }
    }

    // Proses Check-Out
    public function checkout() {
        $this->form_validation->set_rules('id_checkinout', 'ID Check-In/Out', 'required');
        $this->form_validation->set_rules('id_pemesanan', 'ID Pemesanan', 'required');
        $this->form_validation->set_rules('tanggal_checkout', 'Tanggal Check-Out', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('checkout_form');
        } else {
            $data = [
                'id_checkinout'    => $this->input->post('id_checkinout'),
                'id_pemesanan'     => $this->input->post('id_pemesanan'),
                'tanggal_checkout' => $this->input->post('tanggal_checkout'),
            ];

            $this->checkinout_model->process_checkout($data);
            $this->session->set_flashdata('message', 'Check-Out berhasil.');
            redirect('checkinout');
        }
    }

    // Menghapus data check-in/check-out
    public function delete($id_checkinout) {
        $this->checkinout_model->delete_cekinout($id_checkinout);
        $this->session->set_flashdata('message', 'Data Check-In/Check-Out berhasil dihapus.');
        redirect('checkinout');
    }
}