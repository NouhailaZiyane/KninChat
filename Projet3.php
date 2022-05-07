<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <style type="text/css">
      .container{
            background-color: black;
            color:white;
            border: 1px solid black ;
            border-radius: 10px;
            padding-left,right: 100px;
            padding:25px;
            box-shadow: 0 0 15px black;
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
        a{
           color: #0f62fe;
           text-decoration: none;   
        }
        a:hover {
                color:  #e63946; 
                text-decoration:none;weight:bold ;
            }
                    
   </style>
	<title>Connectez-vous sur Twitter</title>
</head>
<body>
	<?php 
   session_start();
   if (isset($_SESSION ['nom'])&&isset($_SESSION['tel'])&&isset($_SESSION ['date_naissance'])) {
       ?>
	  	 <div class="container">
        <img src="logo1.png" width="100px" height="90px"> 
	  	 <h3>Créer votre compte</h3><br>
	<form action="session1.php" method="post">
		<div class="row">
			<div class="col-12">
<div class="form-group">
      <label for="nom">Nom</label>
   <input type="text" class="form-control"  name="nom" id="Nom"  required="required" value='<?php echo $_SESSION ['nom'];
   ?>' >
   </div></div></div><div class="row">
			<div class="col-12">
<div class="form-group">
      <label for="nom">Téléphone</label>
   <input type="text" class="form-control" name="tel" id="tel" required="required" value=<?php echo $_SESSION ['tel'];
   ?>>
   </div></div></div>
   <div class="row">
			<div class="col-12">
   <div class="form-group">
      <label for="date">Date de naissance</label>
   <input type="text" class="form-control" name="date" id="date" required="required" value="<?php 
   echo $_SESSION ['date_naissance'];
   ?>" ></div></div></div>
   <br><br><div class="row">
			<div class="col-12">
  <p >En vous inscrivant, vous acceptez les 
<a href="#">Conditions d'utilisation </a> et la <a href="#">
Politique de confidentialité</a>, ainsi que <a href="#">l'
utilisation des cookies</a>. Les utilisateurs pourront vous trouver grâce à votre adresse email et à votre numéro de téléphone, si vous les avez fournis · <a href="#">
Options de confidentialité</a></p></div></div>
<div class="row"><div class="col-lg-5 col-12"></div><div class="col-12 col-lg-5"><a href="projet2.php"><img src="fleche-2.png" width="60" height="30"></a>
<input type="submit" name="submit"   class="form-submit-button" role="button" value="S'inscrire"></div></div>
   </form></div></div>

   <?php } elseif (isset($_SESSION['nom'])&&isset($_SESSION['email'])&&isset($_SESSION ['date_naissance'])) {?>
      <div class="container">
       <h3 class="text-center">Créer votre compte</h3><br>
   <form action="session1.php" method="post">
      <div class="row">
         <div class="col-12">
<div class="form-group">
      <label for="nom">Nom</label>
   <input type="text" class="form-control"  name="nom" id="Nom"  required="required" value='<?php echo $_SESSION ['nom'];
   ?>' >
   </div></div></div><div class="row">
         <div class="col-12">
<div class="form-group">
      <label for="nom">Email</label>
   <input type="email" class="form-control" name="email" id="email" required="required" value=<?php echo $_SESSION ['email'];
   ?>>
   </div></div></div><div class="row">
         <div class="col-12">
   <div class="form-group">
      <label for="date">Date de naissance</label>
   <input type="text" class="form-control" name="date" id="date" required="required" value="<?php 
   echo $_SESSION ['date_naissance'];
   ?>" ></div></div></div>
   <br><div class="row">
         <div class="col-12">
   <p >En vous inscrivant, vous acceptez les 
<a href="#">Conditions d'utilisation </a> et la <a href="#">
Politique de confidentialité</a>, ainsi que <a href="#">l'
utilisation des cookies</a>. Les utilisateurs pourront vous trouver grâce à votre adresse email et à votre numéro de téléphone, si vous les avez fournis · <a href="#">
Options de confidentialité</a></p></div></div>
<div class="row"><div class="col-lg-4 col-12"><a href="projet2.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-3">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="S'inscrire"></div></div>
   </form></div></div>
</body>
</html>
<?php }else{header("location: projet1.php");}?>