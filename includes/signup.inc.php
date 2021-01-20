<?php
    //check if the user had clicked the button
    if(isset($_POST['signup-submit'])){
        require "dbh.inc.php";
        $username = $_POST['uid'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $r_pwd = $_POST['pwd-repeat'];

        if(empty($username) || empty($email) || 
        empty($pwd) || empty($r_pwd)){
            header("Location: ../signup.php?error=emptyfield&uid=".$username."&email=".$email);
            //do not continue code from here
            exit();
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location: ../signup.php?error=invalidemailuid");
            exit();

        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidemail&uid=" . $username);
            exit();
        }else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location: ../signup.php?error=invalidemail&email=".$email);
            exit();
        }else if(!$pwd == $r_pwd){
            header("Location: ../signup.php?error=passwordcheck&uid=" . $username."&email=" . $email);
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE uid_users= ?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../signup.php?error=sqlierror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,'s',$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck  = mysqli_stmt_num_rows($stmt);
                mysqli_stmt_close($stmt);
                if($resultCheck > 0){
                    header("Location: ../signup.php?error=userTaken&email=".$email);
                    exit();
                }else{
                    $sql = "INSERT INTO users (uid_users,email_users,pwd_users) VALUES (?,?,?);";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){ 
                        header("Location: ../signup.php?error=sqlierror");
                        exit();
                    }else{
                        $hashed_pwd = password_hash($pwd,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,'sss',$username,$email,$hashed_pwd);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_close($stmt);
                        header("Location: ../signup.php?signup=success");
                        exit();
                    }  
                }
            }
        }
        mysqli_close($conn);
    }else{
        header("Location: ../signup.php");
        exit();
    }