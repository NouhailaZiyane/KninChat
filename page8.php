<?php

include("connexion.php");
$output='';
if (isset($_POST["suivant"])) {
  

if (($_POST["search"])=="politique") {
      $searcha="president";
      $searchb="government";
      $searchc="prime";
      $searchd="ministère";
      $searche="président";
        $query=mysqli_query($link,"SELECT * FROM twiter WHERE description LIKE '%$searcha%' OR description LIKE '%$searchb%' OR description LIKE '%$searchc%' OR description LIKE '%$searchd%' OR description LIKE '%$searche%' OR nom LIKE '%$searcha%' OR nom LIKE '%$searchb%' OR nom LIKE '%$searchc%' OR nom LIKE '%$searchd%' OR nom LIKE '%$searche%'" );
      $count= mysqli_num_rows($query);
        if ($count==0) {
          $output= 'Il n\'y a pas de résultat';
        }
        else{
          while ($row=mysqli_fetch_array($query)) {
            $nom=$row['nom'];
                $description=$row['description'];
                $photo=$row['photo'];
                $ph="<img src=\"photos/$photo\" alt=\"image\" height=50 width=50 />";
                $output .= '<div>'.$ph.' '.$nom.' '.$description.'</div>';
            
            }
        }
    }

if (($_POST["search"])=="musique") {
      $searcha="musique";
      $searchb="artist";
      $searchc="musicien";
      $searchd="art";
      $searche="clasique musique";
        $query=mysqli_query($link,"SELECT * FROM twiter WHERE description LIKE '%$searcha%' OR description LIKE '%$searchb%' OR description LIKE '%$searchc%' OR description LIKE '%$searchd%' OR description LIKE '%$searche%'" );
      $count= mysqli_num_rows($query);
        if ($count==0) {
          $output= 'Il n\'y a pas de résultat';
        }
        else{
          while ($row=mysqli_fetch_array($query)) {
            $nom =$row['nom'];
                $description =$row['description'];
                $photo=$row['photo'];
                $ph="<img src=\"photos/$photo\" alt=\"image\" height=40 width=40/>";
                $output .= '<div>'.$ph.' '.$nom.' '.$description.'</div>';
            }
        }
    
}
if (($_POST["search"])=="football") {
        $searcha="football";
        $searchb="footballer";
        $searchc="sport";
        $searchd="team";
        $searche="player";
        $query=mysqli_query($link,"SELECT * FROM twiter WHERE description LIKE '%$searcha%' OR description LIKE '%$searchb%' OR description LIKE '%$searchc%' OR description LIKE '%$searchd%' OR description LIKE '%$searche%'" );
        $count= mysqli_num_rows($query);
        if ($count==0) {
            $output= 'Il n\'y a pas de résultat';
        }
        else{
            while ($row=mysqli_fetch_array($query)) {
                $nom =$row['nom'];
                $description =$row['description'];
                $photo=$row['photo'];
                $ph="<img src=\"photos/$photo\" alt=\"image\" height=40 width=40/>";
                $output .= '<div>'.$ph.' '.$nom.' '.$description.'</div>';
            }
        }
    
}
if (($_POST["search"])=="journalistes") {
        $searcha="journaliste";
        $searchb="tv";
        $searchc="chaîne";
        $searchd="news";
        $searche="journal";
        $query=mysqli_query($link,"SELECT * FROM twiter WHERE description LIKE '%$searcha%' OR description LIKE '%$searchb%' OR description LIKE '%$searchc%' OR description LIKE '%$searchd%' OR description LIKE '%$searche%'" );
        $count= mysqli_num_rows($query);
        if ($count==0) {
            $output= 'Il n\'y a pas de résultat';
        }
        else{
            while ($row=mysqli_fetch_array($query)) {
                $nom =$row['nom'];
                $description =$row['description'];
                $photo=$row['photo'];
                $ph="<img src=\"photos/$photo\" alt=\"image\" height=40 width=40/>";
                $output .= '<div>'.$ph.' '.$nom.' '.$description.'</div>';
            }
        }
    
}
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf_8" />
        <title>inscription</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        #f{
                background-color: black;
                color:white;
                border: 1px solid black ;
                border-radius: 10px;
                padding-left,right: 100px;
                padding:25px;
                box-shadow: 0 0 15px black;
            }
        .form-submit-button-s{
            border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            width: 110px;
            font: bold 19px arial, sans-serif;
            text-shadow: none ;
            margin-left: 0px;
            margin-top: 130px;

            }
        .form-submit-button-s:hover{
                transform: scale(1.1) ;
            }
            .picture-left{
    float: left;
}     
.paragraph-right{
    margin-left: 5%;
}      
.nm{
    font-size: 20px;
}    
    </style>
</head>
<body>
    <div id="f">
    <h2>Suggetions d'abonnements</h2>
    <h6>Quand vous suivez quelqu'un, vous voyez ses Tweets dans votre fil d'actualités.</h6>
    <h4>Vous pourriez être intéressé par</h4>
    <form action="suivre.php" method="POST">
          <?php
            echo $output;  
           ?>
          <div class="container">
            <div class="div-categoryContainer">
                <div class="picture-left">
     
  <img src="joe.jpg"  class="img-circle"  width="50" height="43" >
 </div>
  <div class="paragraph-right">

    <div class="nm">Joe biden <img src="ver.jpg"  class="img-circle"  width="30" height="33" ><input type="checkbox" data-toggle="toggle" data-on="suivre" data-off="suivre" data-toggle="toggle" data-onstyle="danger" data-offstyle="dark" name="joe" >

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'suivre',
      off: 'suivre'
    });
  })
</script></div>
 

    <p> @JoeBiden<br> President-elect,husband to<a href="biden.php">@DrBiden</a>,proud father & grandfather<br> Ready to build back better for all Americans 
</p>
  </div>

</div>
         
 
</div>
 <div class="container">
            <div class="div-categoryContainer">
                <div class="picture-left">
     
  <img src="ariana.jpg"  class="img-circle"  width="50" height="43" >
 </div>
  <div class="paragraph-right">

    <div class="nm">Ariana Grande <img src="ver.jpg"  class="img-circle"  width="30" height="33" ><input type="checkbox" data-toggle="toggle" data-on="suivre" data-off="suivre" data-toggle="toggle" data-onstyle="danger" data-offstyle="dark" name="ariana">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'suivre',
      off: 'suivre'
    });
  })
</script></div>
 

    <p> @ArianaGrande<br>positions
</p>
  </div>

</div>
         
 
</div>
<div class="container">
            <div class="div-categoryContainer">
                <div class="picture-left">
     
  <img src="bts.jpg"  class="img-circle"  width="55" height="45" >
 </div>
  <div class="paragraph-right">

    <div class="nm"> 방탄소년단 <img src="ver.jpg"  class="img-circle"  width="30" height="33" ><input type="checkbox" data-toggle="toggle" data-on="suivre" data-off="suivre" data-toggle="toggle" data-onstyle="danger" data-offstyle="dark" name="bts">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'suivre',
      off: 'suivre'
    });
  })
</script></div>
 

    <p> @BTS_twt<br>Hi! we are BTS!!
</p>
  </div>

</div>
         
 
</div>
 
<div class="container">
            <div class="div-categoryContainer">
                <div class="picture-left">
     
  <img src="obama.jpg"  class="img-circle"  width="55" height="45" >
 </div>
  <div class="paragraph-right">

    <div class="nm">Barack Obama <img src="ver.jpg"  class="img-circle"  width="30" height="33" ><input type="checkbox" data-toggle="toggle" data-on="suivre" data-off="suivre" data-toggle="toggle" data-onstyle="danger" data-offstyle="dark" name=" obama ">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'suivre',
      off: 'suivre'
    });
  })
</script></div>
 

    <p> @BarackObama<br>Dad,husband,president,citizen
</p>
  </div>

</div>
         
 
</div>

        <input type="submit" name="suivant"  value="Suivant" class="form-submit-button-s"><br>
    </form>
    </div>
</body>
</html>

<?php mysqli_close($link); ?>
