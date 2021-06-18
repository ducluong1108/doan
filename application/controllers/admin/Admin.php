<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['view'] = 'admin/dashboard';
        $this->load->view('admin/master_layout_admin', $data);
    }
}

/* End of file Admin.php and path /application/controllers/admin/Admin.php */