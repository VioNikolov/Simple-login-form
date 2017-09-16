<?php
session_start();
require 'db.php';
?>
<!doctype html>
<html>
<head>
    <title>
        Simple login form
    </title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><img src="images/logo.jpg"></li>
            <li style="color: white;"><?php echo $_SESSION['first_name']?></li>
            <li><button type="button"><a href="logout.php">logout</a> </button></li>
        </ul>
    </nav>
    <?php
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
</body>