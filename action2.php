<?php
include("connexion.php");
session_start();
$id1=$_SESSION['id'];
$id= $_GET['id'];
$requette2="INSERT INTO follow (id_utilisateur,following) values('$id1','$id');"; 
$resultat1=mysqli_query($link,$requette2);
header("location:twitter.php")
 ?>