<?php
require_once('../../view/shared/header.php');
session_unset();
session_destroy();
ob_start();
header("location:../../view/index.php");
ob_end_flush(); 
include '../../view/index.php';
exit();