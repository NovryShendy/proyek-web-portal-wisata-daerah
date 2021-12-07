<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'Userhome');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['header'] = $this->Userhome->header('1');
        $data['wheader'] = $this->Userhome->wisata_header('1');
        $data['wisata'] = $this->Userhome->wisata();
        $data['vheader'] = $this->Userhome->vidio_header('1');
        $data['vidio_active'] = $this->Userhome->vidio_active('1');
        $data['vidio'] = $this->Userhome->vidio();
        $this->load->view('home', $data);
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
