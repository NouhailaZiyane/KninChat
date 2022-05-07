<?php
include("connexion.php");
session_start();
$id=$_SESSION['id'];
$int1= $_GET['int1'];
$requette2="DELETE FROM centreint where id_utilisateur='$id' and lib_sujet='$int1';"; 
$resultat1=mysqli_query($link,$requette2);
header("location:projet7.php")
 ?>