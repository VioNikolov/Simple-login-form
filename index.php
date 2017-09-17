<?php
    require 'db.php';
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['signin'])) {
            require 'signin.php';
        }
        elseif (isset($_POST['signup'])) {
            require 'signup.php';
        }
    }
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
            <?php
                require "navbar.php";
            ?>




                    <?php
                    if(isset($_SESSION['logged_in'])) {
                        if($_SESSION['logged_in'] == true) {
                            echo '<h2>Welcome to your site <b>'.$_SESSION['first_name'].' '.$_SESSION['last_name'].'!</b></h2>';
                        }
                    }
                    else {
                        echo '
                        <div class="main">
                            <div class="container">
                                <h2>Sign up</h2>
                                    <p class="alert-success">';

                                if (isset($_SESSION['message'])) {
                                    if ($_SESSION['message'] == 'Registration successful!') {
                                        echo '<p class="alert-success">' . $_SESSION['message'] . '</p>';
                                        unset($_SESSION['message']);
                                    } else {
                                        echo '<p class="alert-warning">' . $_SESSION['message'] . '</p>';
                                        unset($_SESSION['message']);
                                    }
                                }
                        echo '</p>
                        <form method="post" action="">
                            <ul>
                                <li>
                                    <label for="fname">First name</label>
                                </li>
                                <li>
                                    <input id="fname" type="text" name="fname">
                                </li>
                                <li>
                                    <label for="lname">Last name</label>
                                </li>
                                <li>
                                    <input id="lname" type="text" name="lname">
                                </li>
                                <li>
                                    <label for="email">Email</label>
                                </li>
                                <li>
                                    <input id="email" type="email" name="email">
                                </li>
                                <li>
                                    <label for="pass">Password (6 or more characters)</label>
                                </li>
                                <li>
                                    <input id="pass" type="password" name="pass">
                                </li>
                            </ul>

                        <p>By clicking Sign Up, you agree to <span>User Agreement</span>, <span>Privacy Policy</span>, and <span>Cookie Policy</span></p><br>
                        <button class="button" name="signup" type="submit"><b>Sign Up</b></button>
                    </form>';
                    }
                    ?>


                </div>
            </div>
        </body>
    </html>