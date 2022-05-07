<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		span
		{
			position: relative;
			left: 610px;
		}
       
        body{
        margin-left: 400px;
        margin-right: 400px;
        margin-top: 40px;
        margin-bottom: 40px;
       background-image: linear-gradient(to right,#e63946,blue);
      } 
		.container
		{
	        	background-color: black;
	        	color:white;
	        	border: 1px solid black ;
	        	border-radius: 10px;
	        	padding-left,right: 100px;
	        	padding:25px;
	        	box-shadow: 0 0 15px black;
	        }
	        .form-submit-button{
            border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            font: bold 19px arial, sans-serif;
            text-shadow: none ;
           margin-right: 30px;
            }
        .form-submit-button:hover{
                transform: scale(1.1) ;
            }
            .image img{
			 border-radius: 50%;
			position: relative;
		}
	</style>
	<title>Décrivez-vous</title>
</head>
<body>
	<?php 
   session_start();
	if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])) {
	  	 ?>
	<div class="container">
		<img src="logo1.png" width="100px" height="90px"> 
		<div class="row">
			<div class="col">
 <h4>Décrivez-vous</h6><br>
 <p >Qu'est-ce qui fait de vous une personne spéciale? Ne réfléchissez pas trop et amusez-vous.</p></div></div>
 <div class="row">
			<div class="col-12">
				<form class="form-group" action="#" method="post">
					<textarea id="message" maxlength="160" name="bio" class="form-control"></textarea>
                   <div id="counter"></div>
					<script type="text/javascript">
					const messageEle = document.getElementById('message');
const counterEle = document.getElementById('counter');

messageEle.addEventListener('input', function(e) {
    const target = e.target;

    // Get the `maxlength` attribute
    const maxLength = target.getAttribute('maxlength');

    // Count the current number of characters
    const currentLength = target.value.length;

    counterEle.innerHTML = `${currentLength}/${maxLength}`;
});
</script><br><br><br>
<div class="row"><div class="col-lg-3 col-12"><a href="projet5'.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-5">
	<input type="submit" name="submit" role="button"  class="form-submit-button"  value="Passer pour le moment">
				</form>
			</div></div>
</div>
</body></html>

<?php
include('connexion.php');
if (isset($_POST['submit'])) {
 	$bio=$_POST['bio'];
 	$_SESSION['bio']=$_POST['bio'];;
 	$date=$_SESSION ['date_naissance'];
 	$nom=$_SESSION ['nom'];
	$jour=$_SESSION ['jour'];
    $mois=$_SESSION ['mois'];
    $annee=$_SESSION ['annee'];
    $password=$_SESSION['password'];
    $date=$jour.$mois.".".$annee;
    $photo=$_SESSION ['photo'];
	if (isset($_SESSION['tel'])) {
		$tel=$_SESSION ['tel'];
		$requette="INSERT INTO utilisateur (nom,tele,email,date_naissance,password,photo,bio) VALUES ('$nom','$tel','email','$date','$password','$photo','$bio');";
	     $resultat=mysqli_query($link,$requette);
	     $requette="SELECT * FROM utilisateur where nom='$nom' and date_naissance='$date';";
       $resultat=mysqli_query($link,$requette);
       while ($row=mysqli_fetch_array($resultat)) {
       $id=$row['id_utilisateur'];
       $_SESSION['id']=$id;
   }
   $_SESSION['id']=$row['id_utilisateur'];
	     header('location: projet7.php');
	     mysqli_close($link);

	}
	if (isset($_SESSION['email'])) {
		$email=addslashes($_SESSION ['email']);
		$requette="INSERT INTO utilisateur (nom,tele,email,date_naissance,password,photo,bio) VALUES ('$nom',000,'$email','$date','$password','$photo','$bio');";
	     $resultat=mysqli_query($link,$requette);
	    header('location: projet7.php');
	    mysqli_close($link);

	}
	

} } else{header("location: projet1.php");}
 
 ?>
