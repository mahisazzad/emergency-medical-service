<?php
require_once('../../view/shared/header.php');

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$blood = $_REQUEST['blood'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$role = 'user';

$sql = "SELECT * FROM login_details WHERE login_details.email = '$email' AND login_details.role = '$role'";


if (mysqli_num_rows(mysqli_query($con, $sql)) > 0) {
    echo "<script>alert('This Email is already in use.'); window.location.href='../../view/signupForm.php';</script>";
} else {
    $sql = "INSERT INTO login_details (email, password, role) VALUES ('$email', '$password', '$role')";
    mysqli_query($con, $sql);

    $sql2 = "SELECT id FROM login_details WHERE email = '$email'";
    $row = mysqli_fetch_assoc(mysqli_query($con, $sql2));
    $id = $row['id'];

    $sql3 = "INSERT INTO user VALUES ($id, '$name', '$phone', '$age', '$gender', '$blood')";
    mysqli_query($con, $sql3);

    $_SESSION['role'] = $role;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;

    echo "<script>alert('Signup Successful. Welcome..'); window.location.href='../../view/shared/dashboard.php';</script>";
}
    


    

    

    // $sql = "SELECT id FROM login_details WHERE email = '$email'";
    // $row = mysqli_fetch_assoc(mysqli_query($con, $sql));

    // $sql2 = "INSERT INTO user VALUES ($row[id], '$name', '$phone', '$age', '$gender', '$blood') ";
