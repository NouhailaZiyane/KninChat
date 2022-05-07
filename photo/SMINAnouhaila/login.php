  <!DOCTYPE HTML>
<html lang="fr"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Index</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet"
type="text/css">
<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <style type="text/css">
        .container{
          background-color: #FF0000;
          color: white;
          text-align: center;
          width: 200px;
          padding: 20px;
          font-size: 1.2em;
        }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <div class="container"><b>
  <?php 
  if (isset($_POST['submit'])) {
    session_start();
     $cne=$_POST['cne'];
     include("connexion.php");
     $requette="SELECT $cne FROM etudiants where cne='$cne';";
     $query=mysqli_query($link,$requette);
     $count= mysqli_num_rows($query);
        if ($count==0) {
          $output= 'CNE inexistant !';
          echo $output;
        }
        else{
          while ($row=mysqli_fetch_array($query)) {
            $_SESSION['nom']=$row['nom'];
            $_SESSION['prenom']=$row['prenom'];
            $_SESSION['sexe']=$row['sexe'];
            $_SESSION['date_naissance']=$row['date_naisance'];
            $_SESSION['ville_naissance']=$row['ville_naisance'];
            $_SESSION['situation_familiale']=$row['situation_familiale'];
            $_SESSION['adresse']=$row['adresse'];
            $_SESSION['code_pro']=$row['code_pro'];
            $_SESSION['tel']=$row['tel'];
            $_SESSION['photo']=$row['photo'];
            $_SESSION['code_etudiant']=$row['code_etudiant'];
            $_SESSION['cne']=$cne;
          header('location: formulaire_inscription.php');
          }
        }
   } ?>
 </b></div>
</body>
</html>