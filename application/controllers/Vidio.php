<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vidio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('vidio_model', 'Vidio');
    }

    public function create()
    {
        $data['judul'] = "Tambah Data Vidio";
        $data['content'] = 'page_admin/vidio/add';
        $this->load->view('template_admin/layout', $data);
    }

    public function create_process()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'waktu' => $this->input->post('waktu', true),
            'link' => $this->input->post('link', true),
        ];
        $this->Vidio->insert($data);
        redirect('vidio/view');
    }

    public function view()
    {
        $data['judul'] = "Data Vidio";
        $data['vidio'] = $this->Vidio->select();
        $data['content'] = 'page_admin/vidio/select';
        $this->load->view('template_admin/layout', $data);
    }

    public function update($id)
    {
        $data['judul']  = "Ubah Data Link Vidio";
        $data['vidio'] = $this->Vidio->selectbyid($id);
        $data['content'] = 'page_admin/vidio/edit';
        $this->load->view('template_admin/layout', $data);
    }

    public function update_process()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'waktu' => $this->input->post('waktu', true),
            'link' => $this->input->post('link', true),
        ];
        $this->Vidio->update($data, $this->input->post('id_vidio', true));
        redirect('vidio/view');
    }

    public function delete($id)
    {
        $this->Vidio->delete($id);
        redirect('vidio/view');
    }
}


/* End of file Vidio.php and path \application\controllers\Vidio.php */
