<?php
session_start();
  if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>KninChat</title>
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
      span
      {
        color: #e63946;
      }
      .profile-message{
  display:flex;
  flex-wrap: wrap;
  align-items: center;
  padding: 10px 15px;
  
}
.add-extra span button{
  margin: 0 30px 0 0;
  padding: 10px 25px;
  border-radius: 30px;
  border:none;
  background: #e63946;
  font-size: 16px;
  color: white;
  font-weight: 700;
}
.add-extra span button:hover{
  background:#e0191e;
}
.other-tweets{
  width: 100%;
}
.other-tweet{
  width: 100%;
  border-bottom: 1px solid #e8e8e8;
}

.profile-message img{
    width: 50px;
    height: 50px;
  border-radius: 50%;
  cursor: pointer;
  opacity: 0.9;
}
.profile-message img:hover{
  opacity: 1;
}
.profile-message span input{
  padding: 0 0 0 10px;
  font-size: 18px;
  color: #525252;
  letter-spacing: 0.5px;
  border:none;
  outline: none;
      .prefer span{
  padding: 0 20px;
}
.prefer span a{
  text-decoration: none;
  color: black;
  font-size: 18px;
  font-weight: 800;
}
.prefer span i{
  font-size: 18px;
  color: #e63946;
}


</style>

</head>
<body class="">

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
     <img src="logo1.png" width="50" height="50">
    </li>
    <ul class="nav navbar-nav">
        <ul>
                       <a href="twitter.php">  <li >Acceuil</li></a>
                      </ul>
                      <ul>
                        <li>#Explorer</li>
                        </ul>
                        <ul>
                       <li>Notification</li>
                    </ul>
                    <ul>
                       <a href="message.php"> <li>Messages</li></ul></a>
                      <ul> <li>Signets</li></ul>
                      <ul>  <li>Listes</li></ul>
                      <ul> <a href="#"><li>Profil</li></a></ul>
                       <ul><a href="sessiondes.php"><li>Déconnexion</li></a></ul>
                    </ul>
                </div>
            </div>
        </nav>
    <li class="nav-brand">
      <h6>My PROFILE</h6>
    </li>    
  </ul>
<title>twitter</title>

<script src="js/user.js"></script>

                  
<div class="container-fluid gedf-wrapper">
  <div class="row">       
    
    <?php include('profile.php');?>
    <div class="col-md-6 gedf-main">
      
      <div class="card gedf-card" id="postSection">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">tweet</a>
                  <div class="container">
    <div class="options-menu">
      <div class="option-center">
        <div class="logo">
        </div>
        
      </div>
    </div>
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
            <div>
       <h4>Your tweets</h4><br>
</div>
           <?php
              include("connexion.php");
   $output1='';
   $id=$_SESSION['id'];
              $requette1="SELECT * FROM post where id_utilisateur='$id';";
               $resultat2=mysqli_query($link,$requette1);
              while ($row2=mysqli_fetch_array($resultat2)) {
       $count= mysqli_num_rows($resultat2);
       if ($count==0) {
          $output1='vous n\'avez  aucun tweet';
        }
        else{
           $requette2="SELECT * FROM utilisateur where id_utilisateur='$id';";
       $resultat=mysqli_query($link,$requette2);
       while ($row1=mysqli_fetch_array($resultat)) {
        $nom=$row1['nom'];
          $photo=$row1['photo'];
          $message=$row2['message'];
          $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
          $nom1=str_replace(' ', '', $nom);
          $output1.= '<br><div class=row><div class=col>'.$ph.$nom.'</b><i class="fa fa-check-circle-o"></i><br><span>@'.$nom1.'</span><br> '.$message.'</div><br>';
        }
       }}}
       
       echo $output1;
                ?>   
<br><br></div></div></div></div></div><div><br><br>
<h4>Your retweets</h4>
           <?php
              include("connexion.php");
   $output1='';
   $id=$_SESSION['id'];
              $requette1="SELECT * FROM retweeter where id_utilisateur='$id';";
       $resultat2=mysqli_query($link,$requette1);
       $count= mysqli_num_rows($resultat2);
       if ($count==0) {
          $output1= $_SESSION['nom'].' n\'a aucun retweet';
        }
        else{
       while ($row1=mysqli_fetch_array($resultat2)) {
        $nom=$row1['nomf'];
          $photo=$row1['photo'];
          $message=$row1['message'];
          $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
          $nom1=str_replace(' ', '', $nom);
          $output1.= '<div class=row><div class=col>'.$ph.$nom.'</b><i class="fa fa-check-circle-o"></i><br><span>@'.$nom1.'</span><br> '.$message.'</div>';
        }
       }
       
       echo $output1;
                ?>  </div>
        </div><br><br><br><hr>
       
           
    </div></div></div></div></div></div></div></div></li></ul></div>
        
    
        
            </div></div></nav> </div></div></div></div></li></ul></div></div></div></div></div></nav></body></html>
        

      
