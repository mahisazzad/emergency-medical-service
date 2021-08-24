<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM ambulance';
$query = mysqli_query($con, $sql);
?>