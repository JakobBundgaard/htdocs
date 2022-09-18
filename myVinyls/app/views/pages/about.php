<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-fluid text-center" id="index_jumbo">
      <div class="container">
          <h1><?php echo $data['title']; ?></h1>
          <p><?php echo $data['description']; ?></p>
          <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
          <p>Written by: <strong><?php echo 'Jakob Bundgaard'; ?></strong></p>
      </div>
  </div>
  
<?php require APPROOT . '/views/inc/footer.php'; ?>