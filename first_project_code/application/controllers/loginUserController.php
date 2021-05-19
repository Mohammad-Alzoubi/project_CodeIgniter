<?php

class loginUserController extends CI_Controller{
  public function index(){
    $data['title'] = 'login Page';

    // echo $data['title'];
    // die();

    $this->load->view('templates/header.php',$data);
    $this->load->view('pages/login', $data);
    $this->load->view('templates/footer.php');
  }
}


?>