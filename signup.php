<?php require "header.php";?>

<main>
    <div>
        <section class="signup-section">
            <h1>SignUp</h1>
            <form action="includes/signUp.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="email" name="email" placeholder="email">
                <br>
                <input type="password" name="pwd" placeholder="password">
                <br>
                <input type="password" name="pwd-repeat" placeholder="repeat password">
                <br>
                <button type="submit" name="signup-submit">SignUp</button>
            </form>
        </section>
    </div>
</main>
<?php require "footer.php";?>