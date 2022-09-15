<?php 

class Signup extends DbHandler {

    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (user_uid, user_pwd, user_email) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }
        
        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT user_uid FROM users WHERE user_uid = ? OR user_email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        // Check if any rows are returned from query
        // $resultCheck = null;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }


}