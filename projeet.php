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
      input::placeholder
      {
        font-style: italic;
      }
      a{  
        text-decoration: none;
            }
       a:hover {
        color: #e63946; 
        text-decoration:none;weight:bold ;
        }
       {
         transform-style: 
       }
          
       option, #jour, #mois, #annee
       {
        font-weight: bold;
        color: black;

       }
       #jour, #mois, #annee
       {

        font-size: 1.2em;

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
          h4,h2{
            text-align: center;
            margin-bottom: -20px;
          }
          .form-submit-button ,.retweeter{
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
            label{
              color: black;
            }
            .form-control{
              
              border-radius: 9px;
              margin-top: 15px; 
              font: bold 17px   sans-serif;
              height: 60px;
                
            }
            .form-control:hover{
              box-shadow:  0 0 10px #fff;
            }
            img
{
  padding: 5px;
  border-radius: 50%;

}
span
      {
        color: #e63946;
      }
	</style>
	<title>Bienvenue sur KninChat</title>
</head>
<body>
	<div class="container" >
    <?php
    session_start();
    echo '<h1 class=text-center font-weight-light >Bienvenue '.$_SESSION['nom'].'</h1>';
    ?>
    <br><br>
    <form action="#" method="post">
    <div class="row"><div class="col-12">
   <textarea   name="tweeter"  class="form-control"></textarea></div></div>
   <div class="row"><div class="col-lg-4 col-12"></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Tweeter"></div></div></form><br><br>
   <div class="row"><div class="col-12">
   <?php    include("connexion.php");
   $output='';
   $nom=$_SESSION['nom'];
   $password=$_SESSION['password'];
   $requette2="SELECT id_utilisateur FROM utilisateur where nom='$nom' and password='$password';";
       $resultat1=mysqli_query($link,$requette2);
       while ($row=mysqli_fetch_array($resultat1)) {
       $_SESSION['id']=$row['id_utilisateur'];}
       $id=$_SESSION['id']; 
       $requette2="SELECT following FROM follow where id_utilisateur='$id';";
       $resultat1=mysqli_query($link,$requette2);
       while ($row=mysqli_fetch_array($resultat1)) {
       	$following=$row['following'];
        $requette1="SELECT message FROM post where id_utilisateur='$following';";
       $resultat2=mysqli_query($link,$requette1);
       while ($row1=mysqli_fetch_array($resultat2)) {
       	$message=$row1['message'];
        $requette3="SELECT distinct nom, photo FROM utilisateur where id_utilisateur='$following';";
       $resultat3=mysqli_query($link,$requette3);
        while ($row2=mysqli_fetch_array($resultat3)) {
        	$photo=$row2['photo'];
        	$ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
        	$nom=$row2['nom'];
        	$nom1=str_replace(' ', '', $nom);
        	$output .= '<div class=row><div class=col>'.$ph.'<b>'.$nom.'</b><br><span>@'.$nom1.'</span><br> '.$message.'</div></div>';
        	$output.="
        <a href='trait1.php?nom=$nom&message=$message&id=$id&ph=$photo&do=follow'><input type=button  class=retweeter value=retweeter ></a>
       <br><br>";
        }
       }
       }
       ?></div></div>
<div class="row"><div class="col-12">
	<?php 
	       echo $output; ?>
	
</div></div>

  </div></body></html>
  <?php
  if (isset($_POST['submit'])) {
   include("connexion.php");
   $nom=$_SESSION['nom'];
   $password=$_SESSION['password'];
   $message=addslashes($_POST['tweeter']);
   $requette2="SELECT id_utilisateur FROM utilisateur where nom='$nom' and password='$password';";
       $resultat1=mysqli_query($link,$requette2);
       while ($row=mysqli_fetch_array($resultat1)) {
       $_SESSION['id']=$row['id_utilisateur'];}
       $id=$_SESSION['id'];
     $requette1="INSERT INTO post (id_utilisateur,message) values ('$id','$message');";
       $resultat=mysqli_query($link,$requette1); 
       mysqli_close($link);

    }

   ?>