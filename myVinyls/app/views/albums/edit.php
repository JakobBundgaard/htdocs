<?php require APPROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/albums" class="btn btn-dark"><i class="fa fa-backward"></i> <?php echo $lang['btn_back']; ?></a>

<div class="card card-body bg-light mt-5">
  <h2><?php echo $lang['title_edit']; ?></h2>

  <form action="<?php echo URLROOT; ?>/albums/edit/<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">


    <div class="form-group">
      <input type='file' name='files' />
      <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
      <input type="text" name="image_id" value="<?php echo $data['image_id']; ?>">
    </div>
    <div class="form-group">
      <label for="artist"><?php echo $lang['add_album_artist']; ?>: <sup>*</sup></label>
      <input type="text" name="artist" class="form-control form-control-lg <?php echo (!empty($data['artist_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['artist']; ?>">
      <span class="invalid-feedback"><?php echo $data['artist_err']; ?></span>
    </div>
    <div class="form-group">
      <label for="title"><?php echo $lang['add_album_title']; ?>: <sup>*</sup></label>
      <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
      <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
    </div>
    <div class="form-group">
      <label for="released"><?php echo $lang['album_release']; ?>: <sup>*</sup></label>
      <input type="text" name="released" class="form-control form-control-lg <?php echo (!empty($data['released_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['released']; ?>">
      <span class="invalid-feedback"><?php echo $data['released_err']; ?></span>
    </div>
    <div class="form-group">
      <label for="genre">Genre: <sup>*</sup></label>
      <input type="text" name="genre" class="form-control form-control-lg <?php echo (!empty($data['genre_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['genre']; ?>">
      <span class="invalid-feedback"><?php echo $data['genre_err']; ?></span>
    </div>
    <div class="form-group">
      <label for="tracks"><?php echo $lang['album_tracks']; ?>:</label>
      <textarea name="tracks" class="form-control form-control-lg <?php echo (!empty($data['tracks_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['tracks']; ?></textarea>
      <span class="invalid-feedback"><?php echo $data['tracks_err']; ?></span>
    </div>
    <input type="submit" class="btn btn-success" value="<?php echo $lang['btn_submit']; ?>">
  </form>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>