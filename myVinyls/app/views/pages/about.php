<?php require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/languages/lang_config.php';
?>
  <div class="jumbotron jumbotron-fluid text-center" id="index_jumbo">
      <div class="container">
          <h1><?php echo $lang['link_nav_about']; ?></h1>
          <p><?php echo $lang['sub_home']; ?></p>
          <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
          <p><?php echo $lang['written_about']; ?>: <strong><?php echo 'Jakob Bundgaard'; ?></strong></p>
      </div>
  </div>
  
<?php require APPROOT . '/views/inc/footer.php'; ?>