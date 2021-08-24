<?php
require_once('../../view/shared/header.php');
$id = $_GET['id'];

$sql = "DELETE FROM first_aid WHERE first_aid.id=$id";

if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('First Aid Kit Sent'); window.location.href='../../view/admin/manageFirstAid.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}