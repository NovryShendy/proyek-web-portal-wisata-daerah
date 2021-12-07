<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wheader_model extends CI_Model
{
    private $id = 'id_wisata_header';
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        return $this->db->get("wisata_header")->result_array();
    }

    public function selectbyid($id)
    {
        return $this->db->get_where("wisata_header", [$this->id => $id])->row_array();
    }

    public function update($data, $id)
    {
        $this->db->update("wisata_header", $data, [$this->id => $id]);
    }
}

/* End of file Wheader_model.php and path \application\models\Wheader_model.php */
