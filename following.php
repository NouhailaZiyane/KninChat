<!doctype html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Suivre une personne</title>
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
      .fa
      {
        color: #e63946;
        padding-left: 3px;
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
.bouton{
  padding: 5px 20px;
  outline: none;
  border: 2px solid white;
  color: white;
  border-radius: 20px;
  font-size: 17px;
  text-transform: capitalize;
  background-color: blue;
}
.bouton:hover{
  font: bold 19px verdana, sans-serif;
  color: white;
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
            .ense
            {
              display: flex;
            }
            a
            {
              position: relative;
              top: 10px;
            }
            .btn
            {
            	background-color: white;
            	color: red;
            }
	</style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<?php
session_start();
  if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
include("connexion.php");
$output='';
$output1='';
$nom=$_SESSION ['nom'];
       $id=$_SESSION['id'];
        $query=mysqli_query($link,"SELECT * FROM utilisateur WHERE id_utilisateur!='$id';" );
      $count= mysqli_num_rows($query);
        if ($count==0) {
          $output= 'Il n\'y a pas de résultat';
        }
        else{
          while ($row=mysqli_fetch_array($query)) {
            $nom=$row['nom'];
            $nom1=str_replace(' ', '', $nom);;
            $id1=$row['id_utilisateur'];
                $bio=$row['bio'];
                $photo=$row['photo'];
                $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
                $output .= '<div class=row><div class=col>'.$ph.'<b>'.$nom.'</b><i class="fa fa-check-circle-o"></i><br><span>@'.$nom1.'</span><br> '.$bio.'<br></div>';
                $requette2="SELECT * from follow where id_utilisateur='$id' and  following='$id1';";
                $result=mysqli_query($link,$requette2);
                	if (mysqli_num_rows($result)) {
                	$output.="
        <a href='delete.php?id=$id1&do=follow'><input type=button class='btn btn-danger'  value=Unfollow ></a>
        </div><br>";	
                	}else{
                $output.="
        <a href='action1.php?id=$id1&do=follow'><input type=button class=bouton  value=Follow ></a>
        </div><br>";
        }}}
          mysqli_close($link);?>
	<div class="container">
		<div class="row"><div class="col-12">
    <h2>Suggetions d'abonnements</h2></div></div><br>
    <div class="row"><div class="col-12">
    <h6>Quand vous suivez quelqu'un, vous voyez ses Tweets dans votre fil d'actualités.</h6></div></div><br>
    <div class="row"><div class="col-12">
    <h4>Vous pourriez être intéressé par</h4></div></div><br>
    <form action="index.php" method="POST">
          <?php
            echo $output;}
                       ?><br>
                       

 <script type="text/javascript">
   $(document).ready(function() {
    $(".bouton").click(function (){
        if($(this).val()=='Follow')
            $(this).val('Following')
        else if($(this).val()=='Following')
            $(this).val('Follow')
    });
});</script>
    <div class="row"><div class="col-lg-4 col-12"></div><div class="col-12 col-lg-5">
<input type="submit" name="valider" id="valider" class="form-submit-button" value="Suivant"></div></div></form></div>