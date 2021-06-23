<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->load->view('admin/login');
    }
    public function login()
    {
        if ($this->input->is_ajax_request()) {
            $uname = $this->input->post('uname');
            $pname = md5($this->input->post('pname'));

            $this->load->model('Database_model');

            $where = "user_name = '$uname' AND password = '$pname'";
            $acoount = $this->Database_model->select('account', '', '*', $where);
            if (count($acoount) > 0) {
                $response['status'] = 1;
                $response['message'] = 'Đăng nhập thành công';
            } else {
                $response['status'] = 0;
                $response['message'] = 'Tài khoản hoặc mật khẩu không đúng';
            }
            echo json_encode($response);
        }
    }
}

/* End of file Login.php and path /application/controllers/admin/Login.php */