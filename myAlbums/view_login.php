<?php 
$_title = 'Log in';
require_once __DIR__.'/comp_header.php';
 ?>

<div class="wrapper">
    <section class="signup-form">
        <h1>MyAlbums</h1>
        <p>A place for your record collection</p>
        <h2>Log In</h2>
        <div class="signup-form-form">
            <form action="includes/bridge-login.php" method="post">
                <input type="text" name="name" placeholder="Enter username or email">
                <input type="password" name="pwd" placeholder="Enter password">
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>
        
    </section>

   

<?php 
require_once __DIR__.'/comp_footer.php';

?>