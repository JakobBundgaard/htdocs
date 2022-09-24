<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/albums" class="btn btn-dark"><i class="fa fa-backward"></i> Back</a>     
    <br>
    <!-- <div class="bg-secondary p-2 mb-3">
        <h1 class="card-title mb-2"><?php echo $data['album'] ->artist; ?></h1>
    </div>
    <div class="bg-light p-2 mb-3">
        <h5 class="card-subtitle mb-2"><?php echo $data['album'] ->title; ?></h5>
        <p><?php echo $data['album'] ->genre; ?></p>
        <p><?php echo $data['album'] ->released; ?></p>
        <p><?php echo $data['album'] ->tracks; ?></p>
    </div> -->

    <div class="card card-body mb-3">
            
            <div class="bg-light p-2 mg-3">
                <img class="card-img-top" src=" <?php $data['album']->image ?>" alt="Album img">
                <!-- <img class="card-img-top album_img" src="<?php echo $album->image ?>" alt="Album img"> -->

                <h3 class="card-title mb-2"><?php echo $data['album'] ->artist ?></h3>
                <h5 class="card-subtitle mb-2"><?php echo $data['album'] ->title ?></h5>
                <p class="card-text mb-1">Genre: <?php echo $data['album'] ->genre ?></p>
                <p class="card-text mb-1">Released: <?php echo $data['album'] ->released ?></p>
                <p class="card-text">Tracks: <?php echo $data['album'] ->tracks ?></p>
            </div>

            <?php if($data['album']->user_id == $_SESSION['user_id']) : ?>
                <hr>
                <form class="pull-right" action="<?php echo URLROOT; ?>/albums/delete/<?php echo $data['album']->id; ?>" method="post">
                    <a href="<?php echo URLROOT; ?>/albums/edit/<?php echo $data['album']->id; ?>" class="btn btn-dark">Edit</a>
                    <button type="submit" class="btn btn-danger pull-right">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            <?php endif; ?>

        </div>
    
    

    

    <!-- <p><?php //echo $data ?></p> -->

<?php require APPROOT . '/views/inc/footer.php'; ?>