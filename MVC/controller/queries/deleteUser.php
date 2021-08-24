<?php
require_once('../../view/shared/header.php');
$id = $_GET['id'];

$sql = "DELETE FROM user WHERE user.id=$id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('User Removed'); window.location.href='../../view/admin/manageUsers.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}