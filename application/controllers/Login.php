<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $this->load->model('Admin_model', 'Admin');
    }
    public function index()
    {
        $this->load->view('page_admin/login');
    }

    public function cek_login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $cek_admin = $this->Admin->cekAdmin($username);
        if ($cek_admin) {
            if (password_verify($password, $cek_admin['password'])) {
                $sessionData = [
                    'id' => $cek_admin['id'],
                    'nama' => $cek_admin['nama'],
                    'username' => $cek_admin['username'],
                ];
                $this->session->set_userdata($sessionData);
                $this->session->set_flashdata('berhasil', 'Selamat Datang!');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('gagal', 'Periksa kembali username dan password anda');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Akun yang anda masukkan tidak terdaftar');
            redirect('login');
        }
    }
}

/* End of file Login.php and path \application\controllers\Login.php */
