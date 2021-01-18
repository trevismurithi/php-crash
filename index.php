<?php include_once 'includes/db.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="first" id="">
        <input type="text" name="last" id="">
        <input type="text" name="email" id="">
        <input type="text" name="uid" id="">
        <input type="password" name="pwd" id="">
        <button type="submit">Sign Up</button>
    </form>
    <?php
        //get the full url
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullUrl,"signup=empty")==true){
            echo "You did not fill all fields";
        }elseif (strpos($fullUrl,"signup=invalidemail")==true) {
             echo "you used invalid email";
        }
    ?>
</body>
</html>