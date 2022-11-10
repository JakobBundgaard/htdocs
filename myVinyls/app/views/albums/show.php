<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/albums" class="btn btn-dark"><i class="fa fa-backward"></i> <?php echo $lang['btn_back']; ?></a>
<br>

<div class="card card-body mb-3 mt-3">

    <div class="bg-light p-2 mg-3">
        <h3 class="card-title mb-2"><?php echo $data['album']->artist ?></h3>
        <h5 class="card-subtitle mb-2"><?php echo $data['album']->title ?></h5>
        <p class="card-text mb-1">Genre: <?php echo $data['album']->genre ?></p>
        <p class="card-text mb-1"><?php echo $lang['album_release']; ?>: <?php echo $data['album']->released ?></p>
        <p class="card-text"><?php echo $lang['album_tracks']; ?>: <?php echo $data['album']->tracks ?></p>
    </div>

    <?php if ($data['album']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <form class="pull-right" action="<?php echo URLROOT; ?>/albums/delete/<?php echo $data['album']->id; ?>" method="post">
            <a href="<?php echo URLROOT; ?>/albums/edit/<?php echo $data['album']->id; ?>" class="btn btn-dark"><?php echo $lang['btn_edit']; ?></a>
            <button type="submit" class="btn btn-danger pull-right">
                <i class="fa fa-trash"></i> <?php echo $lang['btn_delete']; ?>
            </button>
        </form>
    <?php endif; ?>

</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>