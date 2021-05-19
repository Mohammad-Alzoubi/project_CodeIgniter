<?php

class Posts extends CI_Controller{

  public function index(){
    $data['title'] = 'All Post';

    $data['posts'] = $this->post_model->get_posts();
    
    // echo '<pre>';
    // print_r($data);
    // die();
    $this->load->view('templates/header.php', $data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer.php');
  }

  public function show($id){
    $data['title'] = 'Single Post ';
    $data['post']  = $this->post_model->show_post($id);

    // print_r($data);
    // die();

    $this->load->view('templates/header.php', $data);
    $this->load->view('posts/show', $data);
    $this->load->view('templates/footer.php');
  }


  //Create Post...
  public function create(){

    $data['title'] = 'Create Post ';
    // $data['post']  = $this->post_model->show_post($id);

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header.php', $data);
      $this->load->view('posts/create', $data);
      $this->load->view('templates/footer.php');
    }
    else
    {
      $config['upload_path']          = './images/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 2048;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('image')){
        $error = array('error' => $this->upload->display_errors());
        // $this->load->view('upload_form', $error);
        $post_image = 'default.png';
      }
      else{
        $data = array('upload_data' => $this->upload->data());
        // $this->load->view('upload_success', $data);
        $post_image = $_FILES['image']['name'];
      }
      // echo 'OK...';
        $this->post_model->create_post($post_image);
        redirect('posts');
    }

  }


// Edit Post
  public function edit($id){
    $data['title'] = 'edit Post ';
    $data['post'] = $this->post_model->edit_post($id);
    // print_r($data);
    // die();
    $this->load->view('templates/header.php', $data);
    $this->load->view('posts/edit_post', $data);
    $this->load->view('templates/footer.php');
  }

// Update Post
  public function update($id){

    $data['title'] = 'update Post ';
    $data['post']  = $this->post_model->show_post($id);

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header.php', $data);
      $this->load->view('posts/edit_post', $data);
      $this->load->view('templates/footer.php');

    }
    else
    {
      $data['title'] = 'update Post ';
      $data['post'] = $this->post_model->update_post($id);
      // redirect('posts/'.$id);
      redirect('posts');
    }
  }



// Delete post
  public function delete($id){
    // $data['posts'] = $this->post_model->get_posts();
    $this->post_model->delete_post($id);
    // flash message
    redirect('posts');
  }
}

?>