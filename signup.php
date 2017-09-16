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
elseif (strlen($_POST['pass']) < 6) {
    $_SESSION['message'] = 'Password must be at least 6 characters';
}
elseif (empty($_POST['fname']) || empty($_POST['lname'] || empty($_POST['email'] || empty($_POST['pass'])))){
    $_SESSION['message'] = 'Fill all fields';
}
else {
    $stmt = $mysqli->prepare("INSERT INTO users (first_name, last_name, email, password, hash) ".
        "VALUES ('$first_name', '$last_name', '$email', '$password','$hash')");
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Registration successful!'.'</br>'.' You can now sign in';
    }
    else {
        $_SESSION['message'] = 'Registration failed!';
    }


}
