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
            $this->load->view('home');
        } else {
            $this->load->view($view);
        }
    }
}

/* End of file Home.php and path /application/controllers/Home.php */