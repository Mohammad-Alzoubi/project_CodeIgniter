
<div class="row mb-2">
  <div class="col-md-6">

    <h4 class="display-4"><?= $post['title'] ?></h4>
    <small class='badge badge-secondary mb-2'><?= $post['created_at'] ?></small>
    <!-- <img src="http://via.placeholder.com/600x300" alt=""> -->
    <img style="" src="<?php echo base_url() . 'images/'. $post['image'] ?>" height="400" width="600" alt="">

    <p><?= $post['body'] ?></p>
    <hr>

    <div style="float: left;" class="mr-2">
      <!-- <form action=""> -->
        <?php echo form_open('posts/delete/' . $post['id']) ?>
        <button type="submit" class="btn btn-outline-danger">Delete</button>
      </form>
    </div>
    <a href="<?= base_url().'posts/edit/'.$post['id']?>" class="btn btn-outline-secondary">Edit</a>
  </div>


</div>
