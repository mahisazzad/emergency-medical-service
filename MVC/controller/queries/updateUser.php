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

$sql = "UPDATE user SET name = '$name', phone = '$phone', age = '$age', gender = '$gender', blood = '$blood' WHERE user.id = $id";
mysqli_query($con, $sql);

$sql = "UPDATE login_details SET email = '$email', password = '$password' WHERE login_details.id = $id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('User Updated'); window.location.href='../../view/user/updateUserForm.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}