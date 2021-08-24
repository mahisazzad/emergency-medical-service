<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM hospital';
$query = mysqli_query($con, $sql);
?>