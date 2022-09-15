<?php 

$languages_allowed = ['en', 'dk'];
$language = $_GET['language'] ?? 'en';

if( !in_array($language, $languages_allowed) ) {
    $language = 'dk';
}

$dictionary = [
    'en_delete'=>'delete',
    'dk_delete'=>'slet',

]

?>