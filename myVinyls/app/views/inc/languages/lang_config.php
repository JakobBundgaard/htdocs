<?php



if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
} else if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    $a = explode('?', $_SERVER['HTTP_REFERER']);
    if ($_GET['lang'] == 'en') {

        $_SESSION['lang'] = 'en';
    } else if ($_GET['lang'] == 'dk') {
        $_SESSION['lang'] = 'dk';
    }
    header('Location: ' . $a[0]);
    die();
}

require_once "lang_files/" . $_SESSION['lang'] . ".php";
