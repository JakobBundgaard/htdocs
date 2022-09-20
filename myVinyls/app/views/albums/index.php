<?php require APPROOT . '/views/inc/header.php'; ?>
  
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Your Album Collection</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/albums/add" class="btn btn-dark pull-right">
                <i class="fa fa-pencil"></i> Add Album
            </a>
        </div>
    </div>
    <?php foreach($data['albums'] as $album) : ?>
        <div class="card card-body mb-3">
            
            <div class="bg-light p-2 mg-3">
                <img class="card-img-top" src=" <?php $album->image ?>" alt="Album img">
                

                <h3 class="card-title"><?php echo $album->artist ?></h3>
                <h4 class="card-title"><?php echo $album->title ?></h4>
                <p class="card-text">Released: <?php echo $album->released ?></p>
                <p class="card-text">Tracks: <?php echo $album->tracks ?></p>
                <a href="<?php echo URLROOT; ?>/albums/show_album/<?php echo $album->albumId; ?>" class="btn btn-block btn-dark">More</a>
            </div>

        </div>
    <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
