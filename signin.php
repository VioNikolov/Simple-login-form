<?php
if((isset($_POST['pass_nav']) && !empty($_POST['pass_nav'])) && (isset($_POST['email_nav']) && !empty($_POST['email_nav']))) {
    $email = $mysqli->escape_string($_POST['email_nav']);

    $result_email = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ($result_email->num_rows == 0) {
        $_SESSION['message'] = "Incorrect email or password.";
    } else {
        $user = $result_email->fetch_assoc();

        if(password_verify($_POST['pass_nav'], $user['password'])) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['logged_in'] = true;
            header("location: profile.php");
        }
        else {
            $_SESSION['message'] = "Incorrect email or password.";
        }
    }
} else {
    $_SESSION['message'] = "Fill all fields";
}


