<?php
    if(isset($_POST['login-submit'])){
        require "dbh.inc.php";
        $mailUid = $_POST['mailUid'];
        $password = $_POST['pwd'];
        if(empty($mailUid) || empty($password)){
            header("Location: ../index.php?error=emptyfield");
            exit();
        }else {
            $sql = "SELECT * FROM users WHERE uid_users = ? OR email_users = ?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../index.php?error=preparesqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,'ss',$mailUid,$mailUid);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $pwdVerify = password_verify($password,$row['pwd_users']);
                    if($pwdVerify == false){
                        header("Location: ../index.php?error=passworderror");
                        exit();
                    }else if($pwdVerify == true){
                        session_start();
                        $_SESSION['uid_users'] = $row['uid_users'];
                        $_SESSION['id_users'] = $row['id_users']; 
                        header("Location: ../index.php?login=success");
                        exit();
                    }else{
                        header("Location: ../index.php?error=passworderror");
                        exit();             
                    }
                }else{
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                }
            }
        }

    }else{
    header("Location: ../index.php");
    exit();
    }
?>