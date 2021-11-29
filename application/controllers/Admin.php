<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model', 'admin');
    }

    public function index(){
        $data["content"] = "Halo";
        $this->load->view('template_admin/layout',$data);
    }

    public function create()
    {

    }

    public function view()
    {
        
    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}


/* End of file Admin.php and path /application/controllers/Admin.php */

