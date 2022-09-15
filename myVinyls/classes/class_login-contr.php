<?php 

class loginContr extends Login {

    // properties
    private $uid;
    private $pwd;
    
    // constructor
    public function __construct($uid, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser() {
        // if($this->emptyInput() == false) {
        //     // echo 'Empty input'
        //     header('Location: ../index.php?error=emptyinput');
        //     exit();
        // }
        $this->getUser($this->uid, $this->pwd);
        header('Location: ../login.php');
    }

    // Error handler
    // private function emptyInput() {
    //     // $result = null;
    //     if(empty($this->uid) || ($this->pwd)) {
    //         $result = false;
    //     }else {
    //         $result = true;
    //     }
    //     return $result;
    // }
}