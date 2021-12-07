<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
    }

    public function select()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function cekAdmin($username)
    {
        return $this->db->get_where('admin', ['username' => $username])->row_array();
    }

    public function getCount($table)
    {
        return $this->db->count_all($table);
    }
}

/* End of file Admin_model.php and path /application/models/Admin_model.php */
