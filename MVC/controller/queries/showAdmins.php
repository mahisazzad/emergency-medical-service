<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM admin';
$query = mysqli_query($con, $sql);
