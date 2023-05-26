<?php

class users extends CI_Controller
{

  public function index()

  {
    test();
    //$this->load->model('usermodel');
    // $data['users'] = $this->usermodel->getusers();
    echo "<br>";
    //$this->load->view('users_list', $data);

    $this->load->library('parth');
    $this->parth->test();
    // $this->test();
  }
}
