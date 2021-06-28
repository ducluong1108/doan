<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function receive_mail()
    {
        if ($this->input->is_ajax_request()) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $mail_content = '<!DOCTYPE html>';
            $mail_content .= '<html lang="en" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">';
            $mail_content .= '<head></head>';
            $mail_content .= '<body>';
            $mail_content .= '<p><b>Họ tên:</b>' . $name . '</p>';
            $mail_content .= '<p><b>Email:</b>' . $email . '</p>';
            $mail_content .= '<p><b>Điện thoại:</b>' . $phone . '</p>';
            $mail_content .= '<p><b>Lời nhắn:</b>' . $message . '</p>';
            $mail_content .= '</body></html>';

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'ducluong1108@gmail.com',
                'smtp_pass' => '01686452871duc',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n",
                'wordwrap' => TRUE
            );

            $this->load->library('email', $config);
            $this->email->from($email, 'Khách hàng');
            $this->email->to('xaydunghoangduc@gmail.com');
            $this->email->subject($subject);
            $this->email->message($mail_content);
            if (!$this->email->send()) {
                // show_error($this->email->print_debugger());
                $response['status'] = 0;
                $response['message'] = 'Email chưa được gửi';
            } else {
                $response['status'] = 1;
                $response['message'] = 'Email đã được gửi';
            }
            echo json_encode($response);
        }
    }
}

/* End of file Mail.php and path /application/controllers/Mail.php */