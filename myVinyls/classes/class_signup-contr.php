<?php 

class SignupContr extends Signup {

    // properties
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    // constructor
    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        // if($this->emptyInput() == false) {
        //     // echo 'Empty input'
        //     header('Location: ../index.php?error=emptyinput');
        //     exit();
        // }
        // if($this->invalidUid() == false) {
        //     // echo 'Invalid username'
        //     header('Location: ../index.php?error=username');
        //     exit();
        // }
        // if($this->invalidEmail() == false) {
        //     // echo 'Invalid email'
        //     header('Location: ../index.php?error=email');
        //     exit();
        // }
        if($this->pwdMatch() == false) {
            // echo 'Passwords dont match'
            header('Location: ../view_signup.php?error=pwdmatch');
            exit();
        }
        if($this->uidTakenCheck() == false) {
            // echo 'Username or email taken'
            header('Location: ../view_signup.php?error=useroremailtaken');
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
        header('Location: ../login.php');
    }

    // Error handler
    // private function emptyInput() {
    //     // $result = null;
    //     if(empty($this->uid) || ($this->pwd) || ($this->pwdRepeat) || ($this->email)) {
    //         $result = false;
    //     }else {
    //         $result = true;
    //     }
    //     return $result;
    // }

    private function invalidUid() {
        // $result = null;
        if(!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        // $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        // $result = null;
        if($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        // $result = null;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }



}