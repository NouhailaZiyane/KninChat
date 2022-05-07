<?php
session_start();
session_destroy();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Déconnexion</title>
 	<style type="text/css">
 		body{
    background-image: linear-gradient(to right,#e63946,blue);
    margin-top: 10px;
}
*{
	
	font-family: 'Source Sans Pro', sans-serif;
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
          a{  
        text-decoration: none;
            }
       a:hover {
        color: #e63946; 
        text-decoration:none;weight:bold ;
        }
 	</style>
 </head>
 <body>
 <div class="container">
 	<b>Vous avez déconnecter</b>
 	<a href="acceuil.php">Connectez-vous</b>
 </div>
 </body>
 </html>