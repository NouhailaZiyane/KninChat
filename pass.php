<?php
if (isset($_POST['password'])) {
	session_start();
$_SESSION['password']=$_POST['password'];
header("location: projet5.php");}
?>