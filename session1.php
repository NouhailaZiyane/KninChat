<?php
session_start();
if (isset($_POST['nom'])&&isset($_POST['tel'])&&isset($_POST['date'])) {
	if ($_POST['nom']!=$_SESSION ['nom']||$_POST['tel']!=$_SESSION ['tel']||$_POST['date']!=$_SESSION ['date_naissance']){
		header("location: projet1.php");}
		elseif ($_POST['nom']=$_SESSION ['nom']&&$_POST['tel']=$_SESSION ['tel']&&$_POST['date']=$_SESSION ['date_naissance']) {
		header("location: projet4.php");
		}}
elseif (isset($_POST['nom'])&&isset($_POST['email'])&&isset($_POST['date'])) {
	if ($_POST['nom']!=$_SESSION ['nom']||$_POST['email']!=$_SESSION ['email']||$_POST['date']!=$_SESSION ['date_naissance']) {
		header("location: projet1.php");
	}elseif ($_POST['nom']=$_SESSION ['nom']&&$_POST['email']=$_SESSION ['email']&&$_POST['date']=$_SESSION ['date_naissance']) {
		header("location: projet4.php");
		}}

?>