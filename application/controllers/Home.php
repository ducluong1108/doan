<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index($view = '')
    {
        if ($view == '') {
            $this->load->view('home/home');
        } else {
            $data['view'] = 'home/' . $view;
            $this->load->view('home/master_layout_home', $data);
        }
    }
}

/* End of file Home.php and path /application/controllers/Home.php */