<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Header_model extends CI_Model
{
    private $id = 'id_header';
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        return $this->db->get("header")->result_array();
    }

    public function selectbyid($id)
    {
        return $this->db->get_where("header", [$this->id => $id])->row_array();
    }

    public function update($data, $id)
    {
        $this->db->update("header", $data, [$this->id => $id]);
    }
}

/* End of file Header_model.php and path \application\models\Header_model.php */
