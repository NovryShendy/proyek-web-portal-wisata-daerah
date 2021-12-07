<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Vidio_model extends CI_Model
{
    private $id = 'id_vidio';
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert("link", $data);
    }

    public function select()
    {
        return $this->db->get("link")->result_array();
    }

    public function selectbyid($id)
    {
        return $this->db->get_where("link", [$this->id => $id])->row_array();
    }

    public function update($data, $id)
    {
        $this->db->update("link", $data, [$this->id => $id]);
    }

    public function delete($id)
    {
        $this->db->delete("link", [$this->id => $id]);
    }
}

/* End of file Vidio_model.php and path \application\models\Vidio_model.php */
