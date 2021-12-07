<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('header_model', 'Header');
    }

    public function view()
    {
        $data['judul'] = "Data header";
        $data['header'] = $this->Header->select();
        $data['content'] = 'page_admin/header/select';
        $this->load->view('template_admin/layout', $data);
    }

    public function update($id)
    {
        $data['judul'] = "Ubah Data Header";
        $data['header'] = $this->Header->selectbyid($id);
        $data['content'] = 'page_admin/header/edit';
        $this->load->view('template_admin/layout', $data);
    }

    public function update_process()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'deskripsi' => $this->input->post('deskripsi', true),
        ];
        $this->Header->update($data, $this->input->post('id_header', true));
        redirect('header/view');
    }
}


/* End of file Header.php and path \application\controllers\Header.php */
