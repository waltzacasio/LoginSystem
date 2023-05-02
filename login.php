<?php
    include_once('header.php'); 
?>


    <h2>Log in</h2>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information!</p>";
            }
        }
    ?>

<?php 
    include_once('footer.php');
?>