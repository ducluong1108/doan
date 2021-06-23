<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Database_model');
    }
    public function index($link = '')
    {
        if ($link == '') {
            $data['view'] = 'home/news';

            $data['list_news'] = $this->Database_model->select('news', 'news_id DESC');
        } else {
            $where = "link = '$link'";
            $category = $this->Database_model->select('category', 'category_id DESC', '*', $where);
            if (count($category) > 0) {
                $data['view'] = 'home/category';

                $data['category'] = $category[0]["name"];

                $where = "category = '" . $category[0]['category_id'] . "'";
                $data['list_news'] = $this->Database_model->select('news', 'news_id DESC', '*', $where);
            } else {


                $where = "link = '$link'";
                $data['news'] = $this->Database_model->select('news', '', '*', $where, 1);
                if (count($data['news']) > 0) {
                    $data['view'] = 'home/news_detail';
                    $column = 'name, image, link';
                    $where = "category = '" . $data['news'][0]['category'] . "' AND news_id <>" . $data['news'][0]['news_id'];
                    $data['relative_news'] = $this->Database_model->select('news', 'news_id DESC', $column, $where);
                } else {
                    $data['view'] = '404.php';
                }
            }
        }
        $this->load->view('home/master_layout_home', $data);
    }
}

/* End of file News.php and path /application/controllers/News.php */