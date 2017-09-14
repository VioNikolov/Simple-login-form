<?php
$first_name = $mysqli->escape_string($_POST['fname']);
$last_name = $mysqli->escape_string($_POST['lname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['pass'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string(md5(rand(0,1000)));

$check_if_user_exists = $mysqli->query("SELECT * FROM users WHERE email = '$email'") or die($mysqli->error());

if($check_if_user_exists->num_rows > 0) {
    $_SESSION['message'] = 'This email already exists!';
}
else {
    $sqlQuery = "INSERT INTO users (first_name, last_name, email, password, hash) ".
                "VALUES ('$first_name', '$last_name', '$email', '$password','$hash')";
}
