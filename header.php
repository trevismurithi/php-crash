<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="img/bible.png" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="user-section">
                <?php
                if (isset($_SESSION['uid_users'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>   ';
                } else {
                    echo '
                    <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailUid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="login-submit">Login</button>
                </form><a class="signup-link" href="signup.php">SignUp</a>';
                }
                ?>
                
                             
            </div>
        </nav>
    </header>