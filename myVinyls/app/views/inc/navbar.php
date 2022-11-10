<?php require APPROOT . '/views/inc/languages/lang_config.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about"><?php echo $lang['link_nav_about']; ?></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#"><?php echo $lang['link_nav_welcome']; ?> <?php echo $_SESSION['user_name']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/"><?php echo $lang['link_nav_home']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/albums"><?php echo $lang['link_nav_albums']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/posts"><?php echo $lang['link_nav_posts']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><?php echo $lang['link_nav_logout']; ?></a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/register"><?php echo $lang['link_nav_reg']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/login"><?php echo $lang['link_nav_login']; ?></a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>