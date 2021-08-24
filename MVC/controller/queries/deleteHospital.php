<?php
require_once('../../view/shared/header.php');
$id = $_GET['id'];

$sql = "DELETE FROM hospital WHERE hospital.id=$id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Hospital Removed'); window.location.href='../../view/admin/manageHospitals.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}