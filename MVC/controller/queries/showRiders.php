<?php
require_once('../../view/shared/header.php');

$sql = 'SELECT * FROM rider';
$query = mysqli_query($con, $sql);
