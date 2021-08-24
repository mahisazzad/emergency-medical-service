<?php
require_once('../../view/shared/header.php');

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$location = $_REQUEST['location'];
$need = $_REQUEST['need'];

$sql = "INSERT INTO accident VALUES ('$name','$location','$phone','$need')";

mysqli_query($con, $sql);

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('You Will Get A Call Soon'); window.location.href='../../view/shared/dashboard.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}