<?php
include("connexion.php");
session_start();
$message= addslashes($_GET['message']);
$id=$_GET['id'];
$nom=$_GET['nom'];
$ph=$_GET['ph'];
$requette2="INSERT INTO retweeter (id_utilisateur,nomf,photo,message) values('$id','$nom','$ph','$message');"; 
$resultat1=mysqli_query($link,$requette2);
header("location:account.php")
 ?>