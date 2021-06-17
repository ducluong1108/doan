<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index($view)
    {
        if ($view == '') {
            $data['view'] = 'dashboard';
        } else {
            $data['view'] = $view;
        }
        $this->load->view('admin/master_layout_admin', $data);
    }
}

/* End of file Admin.php and path /application/controllers/admin/Admin.php */