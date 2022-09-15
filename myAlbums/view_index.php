<?php 
$_title = 'Home';
require_once __DIR__.'/comp_header.php';
 ?>

<div class="wrapper">
    <!-- <section class="index-intro">
        <h1>Welcome to MyAlbums</h1>
        <p>A place for your record collection</p>
    </section> -->

    <section class="index-categories">
        <h1>Welcome to MyAlbums</h1>
        <p>A place for your record collection</p>
        <h2>Press Play</h2>
        <div class="index-categories-list">
            <div>
                <a class="index-links" href="album-search" <?= $_title == 'Collection' ? 'class="active"' : '' ?>><h3>See Your Collection</h3></a>
            </div>
            <div>
                <a class="index-links" href="add-album" <?= $_title == 'Add Album' ? 'class="active"' : '' ?>><h3>Add New Album</h3></a>
            </div>
            <div>
                <a class="index-links" href="miss-album" <?= $_title == 'Wishlist' ? 'class="active"' : '' ?>><h3>Album Wishlist</h3></a>
            </div>
        </div>
    </section>

<?php 
require_once __DIR__.'/comp_footer.php';
?>