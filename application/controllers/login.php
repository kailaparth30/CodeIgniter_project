<?php

class Login extends CI_Controller {
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('public/admin_login');
    }

    public function admin_login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'UserName', 'required|alpha|trim');
        $this->form_validation->set_rules('password', 'PassWord', 'required');

        if ($this->form_validation->run()) {
            echo "validation successful. <br>";
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('Login_model');

            $login_id = $this->loginmodel->login_valid($username, $password);
            if ($login_id) {
                $this->load->library('session');
                $this->session->set_userdata('user_id', $login_id);
                echo "Password Match";


            } else {
                echo "Password DO Not Match";
            }
        } else {
            $this->load->view('public/admin_login');
        }
    }
}
