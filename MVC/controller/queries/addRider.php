<?php
require_once('../../view/shared/header.php');

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$blood = $_REQUEST['blood'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$role = 'rider';

$sql = "INSERT INTO login_details (email, password, role) VALUES ('$email', '$password', '$role')";

mysqli_query($con, $sql);

$sql = "SELECT id FROM login_details WHERE email = '$email'";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));

$sql2 = "INSERT INTO rider VALUES ($row[id], '$name', '$phone', '$age', '$gender', '$blood') ";

if (mysqli_query($con, $sql2) === TRUE) {
    echo "<script>alert('Rider Added'); window.location.href='../../view/admin/addRiderForm.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
