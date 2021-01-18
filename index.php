<?php include_once 'includes/db.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //displaying data from the database
        // $sql = "SELECT * FROM users WHERE user_uid='123user';";
        // $result = mysqli_query($conn,$sql);
        // $resultCheck = mysqli_num_rows($result);
        // if($resultCheck > 0){
        //     while($obj = mysqli_fetch_object($result)){
        //         echo $obj ->user_first."<br>";
        //     }
        // }
        // mysqli_free_result($result);
        // mysqli_close($conn);

        /***
         * Database select data
         ***/
        //creating a data variable
        // $data = "123user";
        // //prepared statements by adding placeholders
        // $sql = "SELECT * FROM users WHERE user_uid=?;";
        // //create a prepared statement
        // $stmt = mysqli_stmt_init($conn);
        // //prepare the prepared statement
        // if(!mysqli_stmt_prepare($stmt,$sql)){
        //     echo "database connection failed";
        // }else{
        //     //bind the placeholders
        //     mysqli_stmt_bind_param($stmt,'s',$data);
        //     //Run parameters inside database
        //     mysqli_stmt_execute($stmt);
        //     $result = mysqli_stmt_get_result($stmt);
        //     while($obj = mysqli_fetch_object($result)){
        //         echo $obj ->user_first."<br>";
        //     }
        // }
//mysqli_free_result($result);
       

        /*** 
         * This helps secure your database from injections
         * $first = mysqli_real_escape_string($conn,$_POST['first']);
         * create a form fill, use the values to bind them to the sql
         * statement. I have filled the first variable but have not
         * yet declared them.
         ***/
        // $sql_2 = "
        //     INSERT INTO users(
        //     user_first,user_last,user_email,user_uid,user_pwd
        //     ) 
        //     VALUES 
        //     (
        //     ?,?,?,?,?
        //     );
        //         ";
        // $stmt = mysqli_stmt_init($conn);
        // if(!mysqli_stmt_prepare($stmt,$sql)){
        //     echo "connection failed";
        // }else{
        //     mysqli_stmt_bind_param($stmt,'sssss',$first);
        //     mysqli_stmt_execute($stmt);
        // }
        
        // //bind the placeholders
        // mysqli_close($conn);
    ?>
</body>
</html>