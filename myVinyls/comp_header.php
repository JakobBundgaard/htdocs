<?php 

// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_title ?? 'Page' ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <div>
            <h3>MyAlbums</h3>
            
        </div>
        <ul class="menu-member">
            <?php
                if(isset($_SESSION["userid"]))
                {
            ?>
                <li><a href="profile" <?= $_title == 'Profile' ? 'class="active"' : '' ?>><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="index" <?= $_title == 'Sign up' ? 'class="active"' : '' ?>>HOME</a></li>
                <li><a href="collection" <?= $_title == 'Collection' ? 'class="active"' : '' ?>>Collection</a></li>
                <li><a href="add_album" <?= $_title == 'Add Album' ? 'class="active"' : '' ?>>Add New Album</a></li>
                <li><a href="wishlist" <?= $_title == 'Wishlist' ? 'class="active"' : '' ?>>Wishlist</a></li>
                <li><a href="includes/bridge-logout.php" class="header-login-a">LOGOUT</a></li>
            <?php
                }
                else
                {
            ?>
                <li><a href="signup" <?= $_title == 'Sign up' ? 'class="active"' : '' ?>>SIGN UP</a></li>
                <li><a href="login" class="header-login-a" <?= $_title == 'Login' ? 'class="active"' : '' ?>>LOGIN</a></li>
            <?php  
                }
            ?>
        </ul>
    </nav>
</header>