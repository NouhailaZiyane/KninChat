<?php
include("connexion.php");
session_start();
$id1=$_SESSION['id'];
$id= $_GET['id'];
$requette2="DELETE FROM follow where id_utilisateur='$id1' and following='$id';"; 
$resultat1=mysqli_query($link,$requette2);
header("location:projet8.php")
 ?>