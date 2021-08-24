<?php
require_once('../../view/shared/header.php');

$name = $_POST["name"];
$phone = $_POST['phone'];
$license = $_POST['license'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "UPDATE ambulance SET name = '$name', phone = '$phone', license = '$license' WHERE ambulance.id = $id";
mysqli_query($con, $sql);

$sql = "UPDATE login_details SET email = '$email', password = '$password' WHERE login_details.id = $id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Ambulance Updated'); window.location.href='../../view/admin/manageAmbulances.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}