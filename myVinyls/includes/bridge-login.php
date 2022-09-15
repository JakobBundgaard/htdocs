<?php 
require_once '../classes/class_dbHandler.php';
require_once '../classes/class_login.php';
require_once '../classes/class_login-contr.php';


// Check if user accessed page correctly -> using the submit btn
if(isset($_POST['submit'])) {

    // Grab data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    

    // Instantiate signupController class
    

    
    $login = new LoginContr($uid, $pwd);
    

    // Error handling and user signup
    $login->loginUser();

    // Redirecting to frontpage
    header('Location: ../index?error=none');
}