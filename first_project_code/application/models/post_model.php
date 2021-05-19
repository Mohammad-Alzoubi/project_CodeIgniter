<?php

class post_model extends CI_Model{

  public function get_posts(){
    
    $query = $this->db->get('posts');

    // result_array() مجموعه من العناصر
    return $query->result_array();
  }

  public function show_post($id){
    
    $query = $this->db->get_where('posts', array('id' => $id)) ;

    // row_array() عنصر واحد 
    return $query->row_array();
  }



  // Create Post

  public function create_post($post_image){

    $data = array(
        'title' => $this->input->post('title'),
        'body'  => $this->input->post('body'),
        'image' => $post_image,
    );

    return $this->db->insert('posts', $data);
  }




  // delete Post
  public function edit_post($id){
    $query = $this->db->get_where('posts', array('id' => $id)) ;
    // row_array() عنصر واحد 
    return $query->row_array();
  }


  // Update Post
  public function update_post($id){
    // method 2
    // $id = $this->input->post('id');
    $data = array(
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body'),
    );
    $this->db->where('id', $id);
    $this->db->update('posts', $data);
    return true;
  }


  // delete Post
  public function delete_post($id){
    $query = $this->db->delete('posts', array('id' => $id));
    // row_array() عنصر واحد 
    return $query;
  }








}



?>