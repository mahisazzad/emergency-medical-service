<?php
require_once('../../view/shared/header.php');

$name = 'Dr. '.$_REQUEST['name'];
$phone = $_REQUEST['phone'];
$sector = $_REQUEST['sector'];
$id = $_SESSION['id'];

$sql = "INSERT INTO doctor VALUES ($id, '$name', '$phone', '$sector') ";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Doctor Added'); window.location.href='../../view/hospital/addDoctorForm.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
