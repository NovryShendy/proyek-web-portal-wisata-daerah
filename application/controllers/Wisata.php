<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('wisata_model', 'Wisata');
    }

    public function create()
    {
        $data['judul'] = "Tambah Data wisata";
        $data['content'] = 'page_admin/wisata/add';
        $this->load->view('template_admin/layout', $data);
    }

    public function create_process()
    {
        $config['upload_path']          = './uploads/image/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $img = $this->upload->data();
            $data = [
                'nama' => $this->input->post('nama', true),
                'harga' => $this->input->post('harga', true),
                'gambar' => $img['file_name'],
                'hari' => $this->input->post('hari', true),
            ];
            $this->Wisata->insert($data);
        } else {
            $this->session->set_flashdata('gagal', $this->upload->display_errors());
        }
        redirect('wisata/view');
    }

    public function update_process()
    {
        $config['upload_path']          = './uploads/image/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $img = $this->upload->data();
            $data = [
                'nama' => $this->input->post('nama', true),
                'harga' => $this->input->post('harga', true),
                'gambar' => $img['file_name'],
                'hari' => $this->input->post('hari', true),
            ];
            $edit = $this->Wisata->update($data, $this->input->post('id_wisata', true));
            if ($data) {
                unlink('./uploads/image/' . $this->input->post('gambar_lama', true));
            }
            $this->session->set_flashdata('berhasil', 'Anda berhasil mengubah data Calon');
        } else {
            $this->session->set_flashdata('gagal', $this->upload->display_errors());
        }
        redirect('wisata/view');
    }

    public function view()
    {
        $data['judul'] = "Data Wisata";
        $data['wisata'] = $this->Wisata->select();
        $data['content'] = 'page_admin/wisata/select';
        $this->load->view('template_admin/layout', $data);
    }

    public function update($id)
    {
        $data['judul'] = "Ubah Data Wisata";
        $data['wisata'] = $this->Wisata->selectbyid($id);
        $data['content'] = 'page_admin/wisata/edit';
        $this->load->view('template_admin/layout', $data);
    }

    public function delete($id)
    {
        $this->Wisata->delete($id);
        redirect('wisata/view');
    }
}


/* End of file Wisata.php and path \application\controllers\Wisata.php */
