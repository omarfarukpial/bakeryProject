<?php

include('connect.php');

$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['name'];

$phone = $_POST['phone'];
$pass = $_POST['pass'];


$userInfoUpdate = "INSERT INTO user(email, username, name, phone, password)
                        VALUES ('$email', '$username', '$name', '$phone','$pass')";
if (!($conn->query($userInfoUpdate)) === TRUE) {
    echo "Error: " . $userInfoUpdate . "<br>" . $conn->error;
}

header("Location: login.php");



?>