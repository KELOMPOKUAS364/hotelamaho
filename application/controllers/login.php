<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin'); // Load model Mlogin
        $this->load->library('session'); // Load library session
    }

    // Halaman login
    public function index()
    {
        $this->load->helper('url'); // Load helper URL
        $this->load->view('Login'); // Tampilkan view Login.php
    }

    // Aksi login
    public function aksilogin()
    {
        $username = $this->input->post('username'); // Ambil input username
        $password = $this->input->post('password'); // Ambil input password

        // Cek ke database menggunakan model
        $user = $this->Mlogin->cek_admin($username, $password);

        if ($user) { // Jika user ditemukan
            // Set session data
            $data_session = array(
                'username' => $username,
                'password'=> $password,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session); // Set session

            // Redirect ke halaman hotel
            redirect('hotel');
        } else {
            // Jika login gagal
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('login'); // Redirect kembali ke halaman login
        }
    }

    // Aksi logout
    public function aksilogout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        redirect('login'); // Redirect ke halaman login
    }
}
?>
