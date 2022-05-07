<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
	body{
				margin-left: 400px;
				margin-right: 400px;
				margin-top: 40px;
				margin-bottom: 40px;
			    background-image: linear-gradient(to right,#e63946,blue);
			} 
		.container{
	        	background-color: black;
	        	color:white;
	        	border: 1px solid black ;
	        	border-radius: 10px;
	        	padding-left,right: 100px;
	        	padding:25px;
	        	box-shadow: 0 0 15px black;
	        }
	    
	 .btn{
           color: #0f62fe;
           text-decoration: none;   
      }
      .btn:hover {
                color: #e63946; 
                text-decoration:none;weight:bold ;
            }
      .form-submit-button{
            border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            width: 110px;
            font: bold 19px arial, sans-serif;
            text-shadow: none ;
    }
    .form-submit-button:hover
    {
       transform: scale(1.1) ;
    }                
	.form-control{
              
              border-radius: 9px;
              margin-top: 15px; 
              font: bold 17px  arial, sans-serif;
              height: 60px;
                
            }
            .form-control:hover{
              box-shadow:  0 0 10px #fff;
            }	
	</style>
	<title>Connectez-vous sur Twitter</title>
</head>
<body>
	<?php 
   session_start();
	if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])) {
	  	 ?>
	<div class="container">
    <img src="logo1.png" width="100px" height="90px"> 
		<div class="row">
			<div class="col-12">
			<h4>Il vous faut un mot de passe</h4><div></div>
					<br><br><div class="row"><div class="col-12">
				<p >Vérifiez qu'il contient au moins 8 caractères</p></div></div>
				<form action="#" method="post">
				<div class="form-group">
				<div class="row">
				<div class="col-12">
    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password" size="20" minlength="8" placeholder="Mot de passe" required="required"></div></div>
    <div class="row">
				<div class="col-12">
            <input type="button" id="button" class="btn btn-link" border="0" value="Afficher le mot de passe"></div></div>
<script>
document.getElementById( 'button' ).addEventListener( "click", function() {
   
    attribut = document.getElementById( 'password' ).getAttribute( 'type');
    if(attribut == 'password'){
        document.getElementById( 'password' ).setAttribute( 'type', 'text');
    } else {
        document.getElementById( 'password' ).setAttribute( 'type', 'password');
    }
 });
</script>
    <br><br>
<div class="row"><div class="col-lg-4 col-12"><a href="projet3.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-6">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Suivant"></div></div></form></div></div></div></div></div>
</body>
</html>
<?php } else{header("location: projet1.php");}?>
<?php
if (isset($_POST['password'])) {
$_SESSION['password']=$_POST['password'];
header("location: projet5.php");}
?>

