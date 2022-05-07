<!doctype html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Se connecter</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <style type="text/css">
        body{
        margin-left: 400px;
        margin-right: 400px;
        margin-top: 40px;
        margin-bottom: 40px;
       background-image: linear-gradient(to right,#e63946,blue);
      } 
      {
        position: relative;
        top: 40px;
      }
      span
      {
        color: #e63946;
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
		
img
{
  float: left;
  padding: 5px;
  border-radius: 50%;

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
            a,.btn {
           color: #0f62fe;
           text-decoration: none;   
        }
        a:hover {
                color:  #e63946; 
                text-decoration:none;weight:bold ;
            }
            .btn:hover {
                color:  #e63946; 
                text-decoration:none;weight:bold ;
            }
            h1
            {
              font-size: 2em;
            }
            form-submit-button{
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
        .form-submit-button:hover{
               transform: scale(1.1) ;
            }
        label{
               
                font:  20px white ;
            }
        .form-control{
               height: 60px;
               border-radius: 9px;
                font: bold 23px black ;
                
            }
            
        .form-control:hover{
               box-shadow:  0 0 10px #fff;
            } 
            span
            {
              font-weight: bold;

            }
	</style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<div class="container">
    <img src="logo1.png" width="100px" height="90px"> 
   <h1 class="text-center font-weight-light"> Bienvenue sur KninChat</h1><br><br>
   <h3>Login</h3><br>
   <form action="trait.php" method="post">
    <div class="row">
   <div class="col-12">
   <input type="text" class="form-control" placeholder="Nom et prénom" id="nom" name="nom" required="required" >
</div></div><br>
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
</script><br>
<div class="row"><div class="col-lg-4 col-12"></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Se connecter"></div></div><br><br>
<div class="row"><div class="col-12"><h6>Si vous n'avez pas de compte <a href="projet1.php" >Inscrivez-vous</a></h6></div></div></form>

  </div></body></html>
 