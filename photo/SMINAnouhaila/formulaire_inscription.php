<!DOCTYPE HTML>
<html lang="fr"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Formulaire</title>
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
        body{
        margin-left: 400px;
        margin-right: 400px;
        margin-top: 40px;
        margin-bottom: 40px;
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
            background-color: #000080;
            color:white;
            border: 1px solid black ;
            border-radius: 10px;
            padding-left,right: 100px;
            padding:25px;
            box-shadow: 0 0 15px black;
            font-size: 1.2em;
          }     
        .style2{
              width: 500px;
              height: 55px;
              border-radius: 9px;
              margin-top: 15px;
                font: bold 17px  arial, sans-serif;
                
            }
        .form-submit-button:hover{
                transform: scale(1.1) ;
            }
            h1
            {
              font-size: 2em;
            }
            .btn-link {
           color: #0f62fe;
           text-decoration: none;   
        }
        .btn-link:hover {
                color: #e63946; 
                text-decoration: bold ;
            }    
            .form-submit-button{
           border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            width: 150px;
            font: bold 19px arial, sans-serif;
            text-shadow: none ;
            }
        label{
               
                font:  20px white ;
            }
        .form-control{
               height: 40px;
               border-radius: 9px;
                font: bold 23px black ;
                width: 500px;
                
            }
            
        .form-control:hover{
               box-shadow:  0 0 10px #fff;
            } 
            span
            {
              color:  #e63946; 
              font-weight: bold;

            }
            h4{
              color: #808080;
            }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <div class="container">
      <form action="confirmation.php" method="post">
    <div class="row">
   <div class="col-12">
    <h4>Etudiant</h4>
    <?php
        include("connexion.php");
        session_start();
        if (isset($_POST['submit'])) {
        $sql="SELECT etudiants.cne, etudiants.nom, etudiants.prenom FROM etudiants ORDER BY code_etudiant DESC LIMIT 1 ";
        $result=mysqli_query($link,$sql);
        while ( $data=mysqli_fetch_assoc($result)) { 
          $_SESSION['cne']=$data['cne'];
          $_SESSION['nom']=$data['nom'];
          $_SESSION['prenom']=$data['prenom'];
        }} 

         ?>
            <label for="cne"> CNE : </label>
            <input class="style2" type="text"  name="cne" value=<?php echo $_SESSION['cne'];?>><br>
            <label for="nom"> Nom et Prénom : </label>
            <input  class="style2" type="text" name="nom" value=<?php echo $_SESSION['nom'];
             ?>>  
        
    <h4>Etat civil</h4>
    <label for="nom"> Nom : </label>
    <input class="style2" type="text"  name="nom" value=<?php echo $_SESSION['nom'];?>>
    <label for="prenom"> Prénom : </label>
    <input class="style2" type="text"  name="prenom" value=<?php echo $_SESSION['prenom'];?>>
    <label for="cne"> CNE : </label>
    <input class="style2" type="text"  name="cne" value=<?php echo $_SESSION['cne'];?>>
    <label for="sexe"> Sexe : </label>
    <select name="sexe" id="sexe" class="form-control" size="1">
          <option value="sexe1">F</option>
          <option value="sexe2">M</option>
    </select>
    <label for="situation_familiale"> Situation familiale : </label>
    <select name="situation_familiale" id="situation_familiale" class="form-control" size="1">
          <option value="">Choisissez</option>
          <option value="situation_familiale1">Célibataire</option>
          <option value="situation_familiale2">Marié(e)</option>
    </select>
    <h4>Naissance</h4>
    <label for="date_naissance"> Date naissance : </label>
    <input class="style2" type="date"  name="date_naissance" value="date">
    <label for="ville_naissance"> Ville naisance : </label>
    <input class="style2" type="text"  name="ville_naissance">
    <h4>Adresse</h4>
    <label for="adresse"> Adresse : </label>
    <input class="style2" type="text"  name="adresse">
    <label for="province"> Province/Pays : </label>
    <select name="province" id="province" class="form-control" size="1">
    <option value="">Choisissez</option>
    <?php
    $sql1="SELECT * FROM province";
    $result1=mysqli_query($link,$sql1);
while ($liste_province=mysqli_fetch_assoc($result1))
{
echo '<option value='.$liste_province["code_pro"].'>';
echo $liste_province["lib_pro"];
echo'</option>';
}?>
</select>
<label for="tel"> Tél : </label>
    <input class="style2" type="tel"  name="tel">
    <h4>Bac</h4>
    <label for="serie"> Série bac : </label>
    <select name="serie" id="serie" class="form-control" size="1">
    <?php
    $sql2="SELECT * FROM bac";
    $result2=mysqli_query($link,$sql2);
while ($liste_serie=mysqli_fetch_assoc($result2))
{
echo '<option value='.$liste_serie["code_bac"].'>';
echo $liste_serie["lib_bac"];
echo'</option>';
}?>
</select>
<label for="mention"> Mention : </label>
    <select name="mention" id="mention" class="form-control" size="1">
    <?php
    $sql3="SELECT * FROM mention";
    $result3=mysqli_query($link,$sql3);
while ($liste_mention=mysqli_fetch_assoc($result3))
{
echo '<option value='.$liste_mention["code_men"].'>';
echo $liste_mention["lib_men"];
echo'</option>';
}?>
</select>
<label for="annee"> Année : </label>
<select name="annee" id="annee" class="form-control" size="1">
          <option value="annee1">2021</option>
          <option value="annee2">2020</option>
          <option value="annee3">2019</option>
          <option value="annee4">2018</option>
    </select>
    <label for="etablissement"> Etablissement : </label>
    <select name="etablissement" id="etablissement" class="form-control" size="1">
    <?php
    $sql4="SELECT * FROM etablissement";
    $result4=mysqli_query($link,$sql4);
while ($liste_etablissement=mysqli_fetch_assoc($result4))
{
echo '<option value='.$liste_etablissement["code_etb"].'>';
echo $liste_etablissement["lib_etb"];
echo'</option>';
}?>
</select>
    <h4>Photo</h4>
    <label for="photo"> Déposez votre photo : </label>
    <input class="style2" type="file"  name="photo">
    <h5 align="center">Vérifiez bien votre formulaire avant de cliquer sur s'inscrire</h5>
    <br>
<div class="row"><div class="col-lg-4 col-12"></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="S'inscrire"></div></div>
  </div></div></form></div>
</body>
</html>
