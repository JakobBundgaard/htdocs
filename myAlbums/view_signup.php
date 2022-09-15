<?php 
$_title = 'Sign up';
require_once __DIR__.'/comp_header.php';
 ?>

<div class="wrapper">
    <section class="signup-form">
        <h1>MyAlbums</h1>
        <p>A place for your record collection</p>
        <h2>Sign Up</h2>
        <div class="signup-form-form">
            <form action="includes/bridge-signup.php" method="post">
                <input type="text" name="name" placeholder="Enter name">
                <input type="text" name="email" placeholder="Enter email">
                <input type="text" name="uid" placeholder="Enter username">
                <input type="password" name="pwd" placeholder="Enter password">
                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
        
    </section>

   

<?php 
require_once __DIR__.'/comp_footer.php';

?>