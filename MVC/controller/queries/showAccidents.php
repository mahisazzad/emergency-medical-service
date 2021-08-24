<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM accident ORDER BY need ASC';
$query = mysqli_query($con, $sql);
