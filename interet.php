<?php 
	session_start();
if (isset($_GET['int'])) {
	$value=$_GET['int'];
	$nom=$_SESSION ['nom'];
	$jour=$_SESSION ['jour'];
    $mois=$_SESSION ['mois'];
    $annee=$_SESSION ['annee'];
    $date=$jour.$mois.".".$annee;
   include('connexion.php');
   $requette="SELECT id_utilisateur FROM utilisateur where nom='$nom' and date_naissance='$date';";
	     $resultat=mysqli_query($link,$requette);
	     while ($row=mysqli_fetch_array($resultat)) {
	     $id=$row['id_utilisateur'];$_SESSION['id']=$id;
	 }
   $id=$_SESSION['id'];
   $requette1="INSERT INTO centreint (id_utilisateur,lib_sujet) VALUES ('$id','$value');";
	     $resul=mysqli_query($link,$requette1);
       mysqli_close($link);
}
	 header("location: projet7.php");
?> 