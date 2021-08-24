<?php
require_once('../../view/shared/header.php');

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$license = $_REQUEST['license'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$role = 'ambulance';

$sql = "INSERT INTO login_details (email, password, role) VALUES ('$email', '$password', '$role')";

mysqli_query($con, $sql);

$sql = "SELECT id FROM login_details WHERE email = '$email'";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));

$sql2 = "INSERT INTO ambulance VALUES ($row[id], '$license', '$name', '$phone') ";

if (mysqli_query($con, $sql2) === TRUE) {
    echo "<script>alert('Ambulance Added'); window.location.href='../../view/admin/addAmbulanceForm.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
