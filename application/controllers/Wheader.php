<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wheader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('wheader_model', 'Wheader');
    }

    public function view()
    {
        $data['judul'] = "Data wisata header";
        $data['wheader'] = $this->Wheader->select();
        $data['content'] = 'page_admin/wheader/select';
        $this->load->view('template_admin/layout', $data);
    }

    public function update($id)
    {
        $data['judul'] = "Ubah Data wisata header";
        $data['wheader'] = $this->Wheader->selectbyid($id);
        $data['content'] = 'page_admin/wheader/edit';
        $this->load->view('template_admin/layout', $data);
    }

    public function update_process()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'deskripsi' => $this->input->post('deskripsi', true),
        ];
        $this->Wheader->update($data, $this->input->post('id_wisata_header', true));
        redirect('wheader/view');
    }
}


/* End of file Wheader.php and path \application\controllers\Wheader.php */
