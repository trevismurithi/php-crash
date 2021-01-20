<?php include_once 'includes/db.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</head>
<body>
    <?php
        // echo "test123<br>";
        // echo password_hash("test123",PASSWORD_DEFAULT);

        $input  = "test123";
        $hashed = password_hash("test123",PASSWORD_DEFAULT);
        echo password_verify($input,$hashed);

    ?>
</body>
</html>
</html>