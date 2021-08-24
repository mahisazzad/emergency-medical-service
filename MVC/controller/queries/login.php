<?php
require_once('../../view/shared/header.php');

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM login_details WHERE email='$email' AND password='$password'";
$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    $_SESSION['role'] = $row['role'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    
    header("Location: ../../view/shared/dashboard.php");
} else {
    echo "<script>alert('Wrong Credentials. Please try again.'); window.location.href='../../view/index.php';</script>";
}
