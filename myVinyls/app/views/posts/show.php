<?php require APPROOT . '/views/inc/header.php'; ?>


<a href="<?php echo URLROOT; ?>/posts" class="btn btn-dark mb-3"><i class="fa fa-backward"></i> Back</a>
<br>
<div class="card card-body mb-3">
<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Added by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>
<div class="bg-light p-2 mb-3">
  <p><?php echo $data['post']->body; ?></p>
</div>


<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  
  <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>
      <button type="submit" class="btn btn-danger pull-right">
          <i class="fa fa-trash"></i> Delete
      </button>
  </form>
<?php endif; ?>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>