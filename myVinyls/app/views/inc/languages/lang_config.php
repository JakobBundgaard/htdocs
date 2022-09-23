<?php 


if(!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
} else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    } else if($_GET['lang'] == 'dk') {
        $_SESSION['lang'] = 'dk';
    }
}

require_once "lang_files/" . $_SESSION['lang'] . ".php";

?>