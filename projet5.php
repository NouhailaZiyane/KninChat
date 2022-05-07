<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		input[type='file']{
			display: none;
		}
		body{
        margin-left: 400px;
        margin-right: 400px;
        margin-top: 40px;
        margin-bottom: 40px;
       background-image: linear-gradient(to right,#e63946,blue);
      } 
      .form-submit-button{
          border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            font: bold 19px  arial ,sans-serif;
            text-shadow: none ;
            margin-top: 15px;
           
            }
            .form-submit-button:hover
            {
              transform: scale(1.1) ;
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
	<title>une image de profil</title>
</head>
<body>
	<?php 
   session_start();
	if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])&&$_SESSION['password']) {
	  	 ?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="logo1.png" width="100px" height="90px"> 
<h4>Choisissez une image de profil</h4></div></div><br><div class="row"><div class="col-12">
<p >Vous avez un selfie préféré? Télécharger-le vite</p></div></div><br>
<form action="#" method="post" enctype="multipart/form-data">
	<div class="row">
			<div class="col-3"></div>
			<div class="col">
<input id="file"  type="file" name="fichier" accept="/image*" onchange="displayImage(this)"/>

			<label  class="image"  for="file" id="profiledisplay" >
            <img src="sans titre.png"  height=200 width=200/>
            </label><br></div></div>
	<br><br><br><br>
				<div class="row"><div class="col-lg-3 col-12"><a href="projet4.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-5">

            <input type="submit" name="submit"   class="form-submit-button"  value="Passer pour le moment">	</div></div>
	</div></form></div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$date=$_SESSION ['date_naissance'];
 	$nom=$_SESSION ['nom'];
	$jour=$_SESSION ['jour'];
    $mois=$_SESSION ['mois'];
    $annee=$_SESSION ['annee'];
    $password=$_SESSION['password'];
    $date=$jour.$mois.".".$annee;
	if(isset($_FILES['fichier']) and $_FILES['fichier']['error']==0)
		//pour vérifier que le fichier a été uploader
		//et sans probleme cad l'utilisateur a choisi une photo
	{
		$dossier= 'photo/';
		//si le fichier a été uploadé donc on a un nom temporaire
		$temp_name=$_FILES['fichier']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le fichier est introuvable");
		}//verifier la taille de la photo
		if ($_FILES['fichier']['size'] >= 1000000){
			exit("Erreur, le fichier est volumineux");
		}// les informations sur la photo cad récuperer l'extension de la photo
		$infosfichier = pathinfo($_FILES['fichier']['name']);
		$extension_upload = $infosfichier['extension'];
		// to lower pourque je puisse la comparer
		$extension_upload = strtolower($extension_upload);
		//comparer l'extension que j'ai uploadé avec ces extensions cad ces extensions que je vais accepter
		$extensions_autorisees = array('png','jpeg','jpg');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
		}
		//je la renomme pour que je sois sur et certaine qu'elle a un nom unique 
		$nom_photo=$nom.$tel.$jour.$mois.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="inconnu.jpg";
    }
	$_SESSION['photo']=$ph_name;
	header("location: projet5'.php");
}} else{header("location: projet1.php");}

?>