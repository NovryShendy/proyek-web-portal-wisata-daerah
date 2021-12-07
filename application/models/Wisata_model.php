<?php 
                
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Wisata_model extends CI_Model 
{
    private $id = 'id_wisata';
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insert($data)
    {
        $this->db->insert("wisata", $data);
    }

    public function select()
    {
        return $this->db->get("wisata")->result_array();
    }

    public function selectbyid($id)
    {
        return $this->db->get_where("wisata", [$this->id => $id])->row_array();
    }

    public function update($data,$id)
    {
        $this->db->update("wisata", $data, [$this->id => $id]);
    }

    public function delete($id)
    {
        $this->db->delete("wisata", [$this->id => $id]);
    }
}

/* End of file Wisata_model.php and path \application\models\Wisata_model.php */
                    
