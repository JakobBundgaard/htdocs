<?php require APPROOT . '/views/inc/header.php'; ?>
  
    
      <div class="card card-body bg-light mt-5">
        <h2>Add Album</h2>
        <p>Start adding to your record collection</p>
        <form action="<?php echo URLROOT; ?>/albums/add" method="post">

        <img class="card-img-top" src="/public/img/death-atlas.png" height="185px" width="185px"
                            alt="Artist image">
                        <p></p>
                        <button type="button" class="btn btn-secondary" onclick="importData()">Vælg
                            billede
                        </button>

        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
        </form>
      </div>
    
  
<?php require APPROOT . '/views/inc/footer.php'; ?>