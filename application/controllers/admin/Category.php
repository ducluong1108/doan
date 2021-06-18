<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Database_model');
    }

    public function index()
    {
        $data['view'] = 'admin/category';
        $data['category'] = $this->Database_model->select('category', 'category_id DESC');
        $this->load->view('admin/master_layout_admin', $data);
    }

    public function fetch_category()
    {
        if ($this->input->is_ajax_request()) {
            $column = 'category_id, name';
            $data = $this->Database_model->select('category', 'name ASC', $column);
            echo json_encode($data);
        }
    }

    public function add_category()
    {
        if ($this->input->is_ajax_request()) {
            $name = $this->input->post('name');

            $data = [
                'name' => $name,
                'link' => vietdecode($name)
            ];
            if ($this->Database_model->insert('category', $data) > 0) {
                $response['status'] = 1;
                $response['message'] = 'Thêm thành công';
            } else {
                $response['status'] = 0;
                $response['message'] = 'Thêm thất bại';
            }
            echo json_encode($response);
        }
    }

    public function delete_category()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $where = 'category_id = ' . $id;
            if ($this->Database_model->delete('category', $where)) {
                $response['status'] = 1;
                $response['message'] = 'Xoá thành công';
            } else {
                $response['status'] = 0;
                $response['message'] = 'Xoá thất bại';
            }
            echo json_encode($response);
        }
    }

    public function edit_category()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            $name = $this->input->post('name');
        }

        $where = 'category_id = ' . $id;
        $set = [
            'name' => $name,
            'link' => vietdecode($name)
        ];
        if ($this->Database_model->edit('category', $where, $set)) {
            $response['status'] = 1;
            $response['message'] = "Sửa thành công";
        } else {
            $response['status'] = 0;
            $response['message'] = "Sửa thất bại";
        }
        echo json_encode($response);
    }
}

/* End of file Category.php and path /application/controllers/admin/Category.php */