<?php
require_once('../../view/shared/header.php');

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$location = $_REQUEST['location'];
$rush_hour = $_REQUEST['rush_hour'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$role = 'hospital';

$sql = "INSERT INTO login_details (email, password, role) VALUES ('$email', '$password', '$role')";

mysqli_query($con, $sql);

$sql = "SELECT id FROM login_details WHERE email = '$email'";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));

$sql2 = "INSERT INTO hospital VALUES ($row[id], '$name', '$phone', '$location', '$rush_hour') ";

if (mysqli_query($con, $sql2) === TRUE) {
    echo "<script>alert('Hospital Added'); window.location.href='../../view/admin/addHospitalForm.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>