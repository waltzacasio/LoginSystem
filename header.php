<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


    <style>
      a{
        text-decoration:none;  
      }
    </style>

</head>

<body>

<nav>
    <div>
        <ul>

            <?php
              if (isset($_SESSION["username"])) {
                echo "<li>" . $_SESSION["username"] . "</li>";
                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
              }
              else {
                echo "<li><a href='signup.php'>Sign up</a></li>";
                echo "<li><a href='login.php'>Log in</a></li>";
              }
            ?>
        </ul>
    </div>
</nav>