<?php
require_once('../../view/shared/header.php');

$name = $_POST["name"];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$blood = $_POST['blood'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE rider SET name = '$name', phone = '$phone', age = '$age', gender = '$gender', blood = '$blood' WHERE rider.id = $id";
mysqli_query($con, $sql);

$sql = "UPDATE login_details SET email = '$email', password = '$password' WHERE login_details.id = $id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Rider Updated'); window.location.href='../../view/admin/manageRiders.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}