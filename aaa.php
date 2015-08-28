<?php
include('login.php'); // Includes Login Script

//if (isset($_SESSION['login_user'])) {
//header("Location: profile.php");
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

    </head>
    <body>
        <div id="main">
            <h1>PHP Login</h1>
            <div id="login">
               
                <form action="" method="post">
                    <label>UserName :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Password :</label>
                    <input id="password" name="password" placeholder="**********" type="password">
                    <input name="submit" type="submit" value="Login ">
                    <span><?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?></span>
                </form>
            </div>
        </div>
    </body>
</html>