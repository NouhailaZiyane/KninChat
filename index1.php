

<?php
session_start();
  if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
include("connexion.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>TWITTER</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">        


<link rel="stylesheet" href="css/style.css">
<script src="js/user.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
        margin-left: 40px;
        margin-right: 40px;
        margin-top: 40px;
        margin-bottom: 40px;
       background-image: linear-gradient(to right,#e63946,blue);
      } 
      .blanc{
        background-color: white;
      }
      .content{
        background-color: white;
      }
      
</style>

</head>
<body class="">
  <?php

include("connexion.php");
$output='';
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
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
     <h1 class="navbar-item">KNINCHAT</h1>
    </li>
    <ul class="nav navbar-nav">
        <ul>
                        <li >Acceuil</li>
                      </ul>
                      <ul>
                        <li>#Explorer</li>
                        </ul>
                        <ul>
                      <a href="twitter.php">  <li>Notification</li></a>
                    </ul>
                    <ul>
                        <li>Messages</li></ul>
                      <ul>  <li>Signets</li></ul>
                      <ul>  <li>Listes</li></ul>
                      <ul>  <li>Profil</li></ul>
                       <ul> <li>Plus</li></ul>
                    </ul>
                </div>
            </div>
        </nav>
    </ul>
      <h6>My PROFILE</h6> 
  
<title>twitter</title>

<script src="js/user.js"></script>

<div class="container-fluid gedf-wrapper">
  <div class="row">
    <?php include('profile.php');?>
     <div class="content">
    <div class="content-menu">
      <div class="prefer">
        <span>
          <a href="">Accueil</a>
        </span>
        <span>
          <i class="fa fa-star-o"></i>
        </span>
      </div>
      <div class="you-tweet-other-tweet">
        <div class="your-tweet">
          <div class="profile-message">
            <form action="#" method="post">
            <span>
              <?php
              $photo1=$_SESSION['photo'];
              $ph1="<img src=\"photo/$photo1\" alt=\"image\" height=60 width=60 />";
                             echo $ph1;
                ?></span>
            <span><input type="text" placeholder="Quoi de neuf ?" name="tweeter" ></span>
          </div>
          <div class="add-extra">
            <div class="images-more">
              <span><a href=""><i class="fa fa-picture-o"></i></a></span>
              <span><a href=""><i class="fa fa-bars"></i></a></span>
              <span><a href=""><i class="fa fa-smile-o"></i></a></span>
              <span><a href=""><i class="fa fa-calender-plus-o"></i></a></span>
            </div>
            <span><input type="submit" name="submit"   class="form-submit-button" role="button" value="Tweeter"></span>
          </div>
        </div>
        <div class="other-tweets">
          <div class="other-tweet">
            <div class="profile-msg">
              <?php    

       echo $output;?>
            </div>


    
            <?php } ?>      
        </div>
          

      </div>

    </div>

  </div>

</div>
