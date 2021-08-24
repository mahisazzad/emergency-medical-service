<?php
require_once('../../view/shared/header.php');
$id = $_GET['id'];

$sql = "DELETE FROM ambulance WHERE ambulance.id=$id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Ambulance Removed'); window.location.href='../../view/admin/manageAmbulances.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}