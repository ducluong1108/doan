<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Database_model');
    }
    public function index()
    {
        // $data['news'] = $this->Database_model->call_sp('GetAllNewsWidthCategory');
        $sql = 'select * from category';
        $data['news'] = $this->Database_model->custom_query($sql);

        $this->load->view('admin/news', $data);
    }

    public function add_news()
    {
        if (isset($_POST['submit'])) {
            $name = $this->input->post('name');
            $image = $this->input->post('image');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $category = $this->input->post('category');
            date_default_timezone_set('Etc/GMT+5');
            $datetime = date("Y-m-d h:i:s");

            $data = [
                'name' => $name,
                'description' => $description,
                'content' => $content,
                'image' => $image,
                'link' => vietdecode($name),
                'category' => $category,
                'publish' => $datetime
            ];

            if ($this->Database_model->insert('news', $data) > 0) {
                echo 'Thêm thành công';
            } else {
                echo 'Thất bại';
            }
        } else {
            $data['view'] = 'admin/news_add';
            $this->load->view('admin/master_layout_admin', $data);
        }
    }
}

/* End of file News.php and path /application/controllers/admin/News.php */