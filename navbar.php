<?php
if(isset($_SESSION['logged_in'])) {
    if($_SESSION['logged_in'] == true) {
        echo '<nav>
                                <ul>
                                    <li><a href="index.php"><img src="images/logo.jpg"></a> </li>
                                    
                                    <li><button type="button"><a href="logout.php">Sign out</a> </button></li>
                                    <li><a href="profile.php"><span id="name">'.$_SESSION['first_name'].'</span></a></li>
                                </ul>
                            </nav>';
    }
}
else {
    echo '<form method="post" action="">
                            <nav>
                                <ul>
                                    <li><a href="index.php"><img src="images/logo.jpg"></a></li>
                                                                    
                                    <li><button type="submit" name="signin">Sign in</button> </li>
                                    <li><input name="pass_nav" type="password" placeholder="Password"></li>
                                    <li><input name="email_nav" type="email" placeholder="Email"></li>
                                </ul>
                            </nav>
                        </form>';
}
