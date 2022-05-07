<?php
if (isset($_POST['nom'])&&isset($_POST['tel'])&&isset($_POST['jour'])&&isset($_POST['mois'])&&isset($_POST['annee'])) {
    session_start();
	$_SESSION ['date_naissance']=$_POST['jour']." ".$_POST['mois'].". ".$_POST['annee'];
    $_SESSION ['nom']=$_POST['nom'];
    $_SESSION ['tel']=$_POST['tel'];
    $_SESSION ['jour']=$_POST['jour'];
    $_SESSION ['mois']=$_POST['mois'];
    $_SESSION ['annee']=$_POST['annee'];
    header("location: Projet2.php");
}
elseif (isset($_POST['nom'])&&isset($_POST['email'])&&isset($_POST['jour'])&&isset($_POST['mois'])&&isset($_POST['annee'])) {
    session_start();
	$_SESSION ['date_naissance']=$_POST['jour']." ".$_POST['mois'].". ".$_POST['annee'];
    $_SESSION ['nom']=$_POST['nom'];
    $_SESSION ['email']=$_POST['email'];
    $_SESSION ['jour']=$_POST['jour'];
    $_SESSION ['mois']=$_POST['mois'];
    $_SESSION ['annee']=$_POST['annee'];
    header("location: Projet2.php");
}

?>