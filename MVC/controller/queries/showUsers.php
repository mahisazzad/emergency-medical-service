<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM user';
$query = mysqli_query($con, $sql);
