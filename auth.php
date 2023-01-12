<?php

session_start();

include('connect.php');

$username = $_POST['username'];
$pass = $_POST['pass'];

$authsql = "SELECT * FROM user WHERE username = '$username' AND password = '$pass' ";
$auth= $conn->query($authsql);



if ($auth->num_rows > 0) {
    
    
    $_SESSION['username'] = $username;
    header("Location: index.php");

}
else {

    echo "<script>alert('Wrong username or password!')</script>";
    header("Refresh:0; url=login.php");

}






?>