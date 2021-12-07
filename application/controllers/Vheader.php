<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vheader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('vheader_model', 'Vheader');
    }

    public function view()
    {
        $data['judul'] = "Data Vidio Header";
        $data['vheader'] = $this->Vheader->select();
        $data['content'] = 'page_admin/vheader/select';
        $this->load->view('template_admin/layout', $data);
    }

    public function update($id)
    {
        $data['judul'] = "Ubah Data Vidio Header";
        $data['vheader'] = $this->Vheader->selectbyid($id);
        $data['content'] = 'page_admin/vheader/edit';
        $this->load->view('template_admin/layout', $data);
    }

    public function update_process()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'deskripsi' => $this->input->post('deskripsi', true),
        ];
        $this->Vheader->update($data, $this->input->post('id_vidio_header', true));
        redirect('vheader/view');
    }
}


/* End of file Vheader.php and path \application\controllers\Vheader.php */
