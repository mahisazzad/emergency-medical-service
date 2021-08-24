<?php
require_once('../../view/shared/header.php');

$name = $_POST["name"];
$phone = $_POST['phone'];
$location = $_POST['location'];
$rush_hour = $_POST['rush_hour'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE hospital SET name = '$name', phone = '$phone', location = '$location', rush_hour = '$rush_hour' WHERE hospital.id = $id";
mysqli_query($con, $sql);

$sql = "UPDATE login_details SET email = '$email', password = '$password' WHERE login_details.id = $id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Hospital Updated'); window.location.href='../../view/shared/dashboard.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}