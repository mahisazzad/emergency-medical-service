<?php
require_once('../../view/shared/header.php');
$id = $_GET['id'];

$sql = "DELETE FROM rider WHERE rider.id=$id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Rider Removed'); window.location.href='../../view/admin/manageRiders.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}