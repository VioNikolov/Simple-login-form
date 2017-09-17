<?php
session_start();
require 'db.php';
if($_SESSION['logged_in'] != true){
    header("location: index.php");
}
?>
<!doctype html>
<html>
<head>
    <title>
        Profile
    </title>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>
    <script src="js/ajax.js"></script>
</head>
<body>
    <?php
        require "navbar.php";
    ?>
    <div class="main-table">
        <div class="container-table">
            <table cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = "SELECT * FROM users";
                    $result = $mysqli->query($stmt);

                    while($row = $result->fetch_array())
                    {
                        echo "<tr>
                                   <td>".$row['id']."</td>
                                   <td>".$row['first_name']."</td>
                                   <td>".$row['last_name']."</td>
                                   <td>".$row['email']."</td>
                                   <td><button title='Careful, this action is irreversible!' class='delete' id='".$row['id']."'><i class='fa fa-trash'></i></button></td>
                               </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>