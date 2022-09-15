<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_title ?? 'uppss...' ?></title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>


<header> 
    <nav>
        <div class="wrapper">
            <div class="logo-div">
                <a href="/myAlbums/" <?= $_title == 'Home' ? 'class="active"' : '' ?>><img src="./img/logo.png" alt="Logo" id="logo"></a>
            </div>
            <ul>
                <li><a href="about" <?= $_title == 'About' ? 'class="active"' : '' ?>> About </a></li>
                <li><a href="signup" <?= $_title == 'Sign up' ? 'class="active"' : '' ?>> Join Us </a></li>
                <li><a href="login" <?= $_title == 'Login' ? 'class="active"' : '' ?>> Login </a></li>
            </ul>
        </div>
    </nav>  
</header>