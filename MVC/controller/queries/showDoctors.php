<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM doctor';
$query = mysqli_query($con, $sql);
?>