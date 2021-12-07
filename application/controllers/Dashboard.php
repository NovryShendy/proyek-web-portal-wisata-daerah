<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('Admin_model', 'Admin');
    }

    public function index()
    {
        $data['judul'] = "Beranda";
        $data['dashboard'] = [
            'total_wisata' => $this->Admin->getCount('wisata'),
            'total_vidio' => $this->Admin->getCount('link')
        ];
        $data['content'] = 'page_admin/dashboard';
        $this->load->view('template_admin/layout', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
