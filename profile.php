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
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>
    <script src="js/ajax.js"></script>
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
    <div class="main-table">
        <div class="container-table">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>email</th>
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
                                   <td><button class='delete' id='".$row['id']."'>delete</button></td>
                               </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>