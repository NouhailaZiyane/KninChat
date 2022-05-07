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
            include("connexion.php");
            session_start();
            $cne=$_SESSION['cne'];
            $sql="update etudiants set etudiants.code_etudiant='$code_etudiant', etudiants.nom='$nom',etudiants.prenom='$prenom', etudiants.sexe='$sexe', etudiants.date_naissance='$date_naissance', etudiants.ville_naissance='$ville_naissance', etudiants.situation_familiale='$situation_familiale', etudiants.adresse='$adresse', etudiants.code_pro='$code_pro', etudiants.tel='$tel', etudiants.photo='$photo' where cne='$cne'";
            $code_etudiant=$_POST['code_etudiant'];
            $code_bac=$_POST['code_bac'];
            $code_men=$_POST['code_men'];
            $annee_obt_bac=$_POST['annee_obt_bac'];
            $code_etb=$_POST['code_etb'];
            $sql1="insert into bac_etudiant(code_etudiant,code_bac,code_men,annee_obt_bac,code_etb) values('$code_etudiant','$code_bac','$code_men','$annee_obt_bac','$code_etb')";
            $result=mysqli_query($link,$sql);
            $result1=mysqli_query($link,$sql1);
            if($result==true and $resultat==true){
                echo"vos donnees sont enregistres"
            }
            else{
                echo"Erreur,réessayez";
            }
            }
?> 
</b></div>
</body>
</html>