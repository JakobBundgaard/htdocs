<?php 

session_start();
$_title = 'Login';
require_once __DIR__.'/comp_header.php';


?>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Login up here!</p>
            <form action="includes/bridge-login.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</section>
    
<?php 

require_once __DIR__.'/comp_footer.php';
?>