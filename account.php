 <?php
 session_start();
  if (isset($_SESSION ['nom'])&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
include("connexion.php");
$output='';
   $id=$_GET['id'];
        $query=mysqli_query($link,"SELECT * FROM utilisateur WHERE id_utilisateur='$id';" );
      $count= mysqli_num_rows($query);
          while ($row=mysqli_fetch_array($query)) {
            $nom=$row['nom'];
            $nom1=str_replace(' ', '', $nom);;
            $id=$row['id_utilisateur'];
                $bio=$row['bio'];
                $photo=$row['photo'];
                $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 class=n />";
        }
          mysqli_close($link);?>
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
      .blanc{
        background-color: white;
      }
      .content{
        background-color: white;
      }
      .profile-message
      {
        padding: 20px;
      }
      span
      {
        color: #e63946;
      }

.btn{
  padding: 5px 20px;
  border-radius: 20px;
  font-size: 17px;
  text-transform: capitalize;
}

      
</style>

</head>
<body >
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
     <h1 class="navbar-item">KNINCHAT</h1>
    </li>
    <ul class="nav navbar-nav">
        <ul>
                        <li ><a href="twitter.php">Acceuil</a></li>
                      </ul>
                      <ul>
                        <a href="sug.php"><li>#Explorer</li></a>
                        </ul>
                        <ul>
                      <a href="twitter.php"><li>Notification</li></a>
                    </ul>
                    <ul>
                        <a href="message.php"><li>Messages</li></a></ul>
                      <ul><li>Signets</li></ul>
                      <ul> <li>Listes</li></ul>
                      <ul> <a href="index.php"><li>Profil</li></ul>
                       <ul><a href="sessiondes.php"><li>Déconnexion</li></a></ul>
                    </ul>
                </div>
            </div></ul>
        </nav>
    <br>
      <h6> PROFILE</h6>
   
  </ul>

<script src="js/user.js"></script>

<div class="container-fluid gedf-wrapper">
  <div class="row">
    
<div class="col-sm-4">
  <div class="card">
    <div class="card-body">
      <div class="h5">
        <span>
              <?php
              
              $ph1="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
                             echo $ph1;
                ?></span>
      </div>
      <div class="h5"><a href="">@<?php echo  $nom; ?></a></div>
      <div class="h7 text-muted"><?php echo  $nom; ?></div>
      <div class="h7"><?php echo  $bio; ?></div>
    </div>
    <ul class="list-group list-group-flush">
      
      <li class="list-group-item">
      </li>         
    </ul>
        </div>
      
  </div>
<div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tweets de <?php echo $nom;?></h5>
        <p class="card-text"><?php
              include("connexion.php");
   $output1='';
              $requette1="SELECT message FROM post where id_utilisateur='$id';";
       $resultat2=mysqli_query($link,$requette1);
       $count= mysqli_num_rows($resultat2);
       if ($count==0) {
          $output1= $nom.' n\'a aucun tweet';
        }
        else{
       while ($row1=mysqli_fetch_array($resultat2)) {
        $message=$row1['message'];
        $requette3="SELECT * FROM utilisateur where id_utilisateur='$id';";
       $resultat3=mysqli_query($link,$requette3);
        while ($row2=mysqli_fetch_array($resultat3)) {
          $photo=$row2['photo'];
          $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
          $nom=$row2['nom'];
          $nom1=str_replace(' ', '', $nom);
          $output1.= '<div class=row><div class=col>'.$ph.'<b>'.$nom.'</b><i class="fa fa-check-circle-o"></i><br><span>@'.$nom1.'</span><br> '.$message.'</div>';
        }
       }}
       
       echo $output1;
                ?></p>
        
      </div>
    </div>
  </div>
</div>
</div>
   
            <?php } ?>      

        </body></html>  

     