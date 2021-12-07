<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    private $id_header = 'id_header';
    private $id_wisata_header = 'id_wisata_header';
    private $id_link_header = 'id_vidio_header';
    private $id_vidio = 'id_vidio';

    public function header($id)
    {
        return $this->db->get_where("header", [$this->id_header => $id])->row_array();
    }

    public function wisata_header($id)
    {
        return $this->db->get_where("wisata_header", [$this->id_wisata_header => $id])->row_array();
    }

    public function wisata()
    {
        return $this->db->get("wisata")->result_array();
    }

    public function vidio_header($id)
    {
        return $this->db->get_where("link_header", [$this->id_link_header => $id])->row_array();
    }

    public function vidio_active($id)
    {
        return $this->db->get_where("link", [$this->id_vidio => $id])->row_array();
    }

    public function vidio()
    {
        return $this->db->get("link")->result_array();
    }
}


/* End of file Home_model_model.php and path \application\models\Home_model_model.php */
