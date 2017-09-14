<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'maindb';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);