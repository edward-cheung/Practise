<?php
session_start();
$_SESSION['name']='yida';
//echo session_id();
//session_destroy();
header('Location:2.php');
?>