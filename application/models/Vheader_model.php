<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Vheader_model extends CI_Model
{
    private $id = 'id_vidio_header';
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        return $this->db->get("link_header")->result_array();
    }

    public function selectbyid($id)
    {
        return $this->db->get_where("link_header", [$this->id => $id])->row_array();
    }

    public function update($data, $id)
    {
        $this->db->update("link_header", $data, [$this->id => $id]);
    }
}

/* End of file Vheader_model.php and path \application\models\Vheader_model.php */
