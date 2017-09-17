<?php
session_start();
require 'db.php';


$id = $_POST['id'];
echo $_POST['id'];

$stmt = $mysqli->prepare("DELETE FROM users WHERE id=".$id);
$stmt->execute();
$stmt->close();