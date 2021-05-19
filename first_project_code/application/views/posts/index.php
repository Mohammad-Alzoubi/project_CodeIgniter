<?php foreach($posts as $post) :?>

<div class="row mb-2">
  <div class="col-md-3">
    <!-- <img src="http://via.placeholder.com/200" alt=""> -->
    <img src="<?php echo base_url() . 'images/'. $post['image'] ?>" height="200" width="200" alt="">
  </div>

  <div class="col-md-9">
    <h4><?= $post['title'] ?></h4>
    <small class='badge badge-secondary'>
    <?= $post['created_at'] ?>
    </small>

    <p><?= $post['body'] ?></p>
    <a href="<?= base_url().'posts/'.$post['id']?>" class="btn btn-outline-secondary">Read More...</a>

  </div>

</div>

<?php endforeach;?>