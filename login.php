<?php

session_start();
//$spath =  $_SERVER("DOCUMENT_ROOT");

//echo $_POST['username'];

 // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


// Selecting Database
$db = mysql_select_db("db_login", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select un from login where pw='$password' AND un='$username'", $connection);

//$row= mysql_fetch_assoc($query);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session

header("Location:http://localhost/Nadee_docs/profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}

?>