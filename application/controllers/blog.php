<?php

class Blog  extends CI_Controller {

    public function index()
    {
       $this->load->model('authenticate','m');
       $data = $this->m->getData();
     
       print_r($data);  

       $this->load->view('blog_index');
    }

    
}
?>