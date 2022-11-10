<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-dark"><i class="fa fa-backward"></i> <?php echo $lang['btn_back']; ?></a>
  <div class="card card-body bg-light mt-5">
    <h2><?php echo $lang['title_add_post']; ?></h2>
    <p><?php echo $lang['sub_title_add_post']; ?></p>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post">
      <div class="form-group">
        <label for="title"><?php echo $lang['add_album_title']; ?>: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="body"><?php echo $lang['post_body']; ?>: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="<?php echo $lang['btn_submit']; ?>">
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>