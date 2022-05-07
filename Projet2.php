<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

        h2{
            margin-bottom: 75px;
            text-align: center;
        }
        .x {
        display: block;
        position: relative;
        margin-top: -25px;
        cursor: pointer;
        font-size: 20px;
        } 
      label
      {
      	display: flex;
      }
      h4{
        margin-bottom: 40px;
      }
      input[type=checkbox] {
        visibility: hidden;
      }
      .check{
      	position: absolute;
        height: 25px;
        width: 25px;
        background-color: white;
        border-radius: 6px;
      }
      .x:hover input ~ .check {
        background-color: gray;
      }
      .x input:active ~ .check{
        background-color: white;
      }
      .x input:checked ~ .check {
        background-color: #0f62fe;
      }
      .check:after {
        content: "";
        position: absolute;
        display: none;
      }
      .x input:checked ~ .check:after {
        display: block;
      }
      .x .check:after {
        left: 9px;
        bottom: 5px;
        width: 9px;
        height: 20px;
        border: solid white;
        border-width: 0 4px 4px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
      }
       p{
           margin-bottom: 45px;  
           margin-top: -50px;   

      }
      
      a{
           color: #0f62fe;
           text-decoration: none;   
      }
      a:hover {
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
		
		
	</style> 
	<title>Connectez-vous sur Twitter</title>
</head>
<body>
	<?php 
   session_start();
	if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])) {
	  	 ?>
	<div class="container">
		<div class="row">
		<div class="col-12">
      <img src="logo1.png" width="100px" height="90px"> 
	<h2>Personnalisez votre expérience</h2></div></div>
	<div class="row">
	<div class="col-12">
	<h4>Suivez les endroits où vous voyez conteenu Twitter sur le Web.</h4></div></div><br><br><br>
	<div class="row"><div class="col-10">
      <p id="p1">Twitter utilise ces données pour personnaliser votre expérience. Cet historique de navigation ne sere jamais stocké avec votre nom, votre adresse email ou votre numéro de téléphone.</p></div>
      <div class="col-2">
	<form action="projet3.php" method="post">
		<label class="x">
        <input  type="checkbox" name="check" checked="checked">
        <span class="check"></span>
        </label><br>
</div></div>
	<div class="row">
	<div class="col-12">
	<div id="div1">Pour plus de détails sur ces paramètres, rendez-vous dans <a href="#"> le Centre d'assistance</a> .</div></div>
</div><br><br>
<div class="row"><div class="col-lg-4 col-12"><a href="projet1.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Suivant"></div></div></div></form>
</body>
</html>
<?php } else{header("location: projet1.php");}?>
