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
                    <li><input type="email" placeholder="Email"></li>
                    <li><input type="password" placeholder="Password"></li>
                    <li><button type="submit">Sign in</button> </li>
                </ul>
            </nav>

            <div class="main">
                <div class="container">
                    <h2>Sign up</h2>
                    <form method="get" action="">
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
                        <button id="signup" type="submit"><b>Sign Up</b></button>
                    </form>
                </div>
            </div>
        </body>
    </html>