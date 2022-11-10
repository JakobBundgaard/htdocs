<?php require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/languages/lang_config.php';
?>
  <div class="jumbotron jumbotron-fluid text-center" id="index_jumbo">
    <div class="container">
    <h1 class="display-3"><?php echo $data['title']; ?></h1>
    <p class="lead"><?php echo $lang['sub_home']; ?></p>
    </div>
  </div> 
<?php require APPROOT . '/views/inc/footer.php'; ?>
