<?php 

// require_once __DIR__.'/_x.php';

require_once '../classes/class_dbHandler.php';
require_once '../classes/class_signup.php';
require_once '../classes/class_signup-contr.php';


// Check if user accessed page correctly -> using the submit btn
if(isset($_POST['submit'])) {

    // Grab data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    // Instantiate signupController class
    

    
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    

    // Error handling and user signup
    $signup->signupUser();

    // Redirecting to frontpage
    header('Location: ../login?error=none');
}