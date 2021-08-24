<?php
require_once('../../view/shared/header.php');

$id = $_SESSION['id'];

$sql = "SELECT * FROM rider WHERE rider.id = $id";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));

$name = $row['name'];
$phone = $row['phone'];

$sql = "INSERT INTO first_aid VALUES ($id, '$name','$phone')";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('You Will Get First Aid Kit Soon'); window.location.href='../../view/shared/dashboard.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}