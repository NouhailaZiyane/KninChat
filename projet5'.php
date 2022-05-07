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
            font: bold 19px  arial ,sans-serif;
            text-shadow: none ;
            margin-top: 15px;
           
            }
            .form-submit-button:hover
            {
              transform: scale(1.1) ;
            }
	        
            img{
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
<p>Vous avez un selfie préféré? Télécharger-le vite</p></div></div><br>
	<div class="row">
			<div class="col-3"></div>
			<div class="col">
            <?php 
			$photo=$_SESSION['photo'];
			$ph="<img src=\"photo/$photo\" alt=\"image\" height=200 width=200/>";
			echo $ph;  ?>
           <br></div></div>
	<br><br><br><br>
				<div class="row"><div class="col-lg-4 col-12"><a href="projet5.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-7">
            <a href="projet6.php"><input type="button" class="form-submit-button" value="Suivant"></a>
           	</div></div>
	</div></div>
</body>
</html>
<?php }else{header("location: projet1.php");} ?>
