<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('admin/news');
    }

    public function add_news()
    {
        $name = $this->input->post('name');
        $image = $this->input->post('image');
        $description = $this->input->post('description');
        $content = $this->input->post('content');

        $data = [
            'name' => $name,
            'description' => $description,
            'content' => $content,
            'image' => $image,
            'link' => vietdecode($name)
        ];
        $this->load->model('Database_model');
        if ($this->Database_model->insert('news', $data) > 0) {
            echo 'Thêm thành công';
        } else {
            echo 'Thất bại';
        }
    }
}

/* End of file News.php and path /application/controllers/admin/News.php */