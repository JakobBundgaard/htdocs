<?php require APPROOT . '/views/inc/header.php'; ?>
  
      <a href="<?php echo URLROOT; ?>/albums" class="btn btn-dark"><i class="fa fa-backward"></i> Back</a>     

      <div class="card card-body bg-light mt-5">
        <h2>Add New Album</h2>
        <p>Start adding to your record collection</p>
        <form action="<?php echo URLROOT; ?>/albums/add" method="post" enctype="multipart/form-data">

                        
          <div class="form-group">
            <input name="image" type="file" class="card-img-top" value="<?php echo $data['image']; ?>" onclick="importData()">
                            
            <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
                        <!-- <input type="submit" class="btn btn-secondary" value="Vælg billede" onclick="importData()"> -->
            
          </div>
          <div class="form-group">
            <label for="artist">Artist: <sup>*</sup></label>
            <input type="text" name="artist" class="form-control form-control-lg <?php echo (!empty($data['artist_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['artist']; ?>">
            <span class="invalid-feedback"><?php echo $data['artist_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="released">Released: <sup>*</sup></label>
            <input type="text" name="released" class="form-control form-control-lg <?php echo (!empty($data['released_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['released']; ?>">
            <span class="invalid-feedback"><?php echo $data['released_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="genre">Genre: <sup>*</sup></label>
            <input type="text" name="genre" class="form-control form-control-lg <?php echo (!empty($data['genre_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['genre']; ?>">
            <span class="invalid-feedback"><?php echo $data['genre_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="tracks">Tracks:</label>
            <textarea name="tracks" class="form-control form-control-lg <?php echo (!empty($data['tracks_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['tracks']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['tracks_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
    
  
<?php require APPROOT . '/views/inc/footer.php'; ?>