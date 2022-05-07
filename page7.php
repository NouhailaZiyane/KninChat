<?php
         include("connexion.php");

         $description=$_POST['description'];
        
                session_start();
        $nom=$_SESSION['nom'];
        
        $sqli=" UPDATE twiter SET description='$description' WHERE nom='$nom'";
        
         $result=mysqli_query($link,$sqli);
         ?>
<!DOCTYPE html>
<html>
<head>
    <title>inscription</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        #f{
                background-color: black;
                color:white;
                border: 1px solid black ;
                border-radius: 10px;
                padding-left,right: 100px;
                padding:25px;
                box-shadow: 0 0 15px black;
            }
        .form-submit-button{
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
        .form-submit-int-s:hover{
                transform: scale(1.1) ;
            }    
        .b {
            border: 1px ;
            border-radius: 15px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: white;
            margin-bottom: 8px;
            margin-left: 10px;
            font: bold 16px arial, sans-serif;
            padding-bottom: 5px;
            padding-top: 5px;
            border-color:white;
        }
        .button:focus{
            background-color:yellow;
        }
       
        .a {
            width: 100%;
            border-radius: 30px;
            padding:15px;   
        }
        .b :focus{
            background-color:yellow;
        }
        label{
            font: bold 19px arial, sans-serif;
            margin-bottom: 12px;
            margin-top: 25px;
        }
        button {
  background-color:yellow;
}

button:focus {
  background-color:orange;
}

     </style>
</head>

<body class="bg-ingo">
    <div class="container">
        <div class="row">
            
                <div id="f"> 
                <h2>Quels sont les sujets qui vous intéressent ?</h2>
                <p >Sélectionnez des sujets qui vous intéressent afin de personnaliser votre expérience Twitter, notamment pour trouver des personnes à suivre.<p>
                <form action="email12.php" method="post" class="from-inline p-3">
                    <input class="a" type="text" name="search" id="search" placeholder="Recherchez des centres d'intérêt."><br>
                     <div  style="position:relative;margin-top:-1px;margin-left:15px;width: 430px;" >
                <div class="list-group" id="show-list">
                    
                </div>
            </div>
            
            <label>Actualités</label><br>
            
<input type="checkbox" data-toggle="toggle" data-on="actualites general" data-off="actualites general" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'actualites general',
      off: 'actualites general'
    });
  })
</script>

         
<input type="checkbox"  data-toggle="toggle" data-on="journaliste" data-off="journaliste" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'journaliste',
      off: 'journaliste'
    });
  })
</script>
            
                 
            
<input type="checkbox"  data-toggle="toggle" data-on="actualites internationale" data-off="Actualités internationale" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Actualités internationale',
      off: 'Actualités internationale'
    });
  })
</script><br>
            <label>Sport</label><br>
            <input type="checkbox" data-toggle="toggle" data-on="sport locaux" data-off="sport locaux" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'soprt locaux',
      off: 'soprt locaux'
    });
  })
</script>
      <input type="checkbox" data-toggle="toggle" data-on="football" data-off="football" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'football',
      off: 'football'
    });
  })
</script>
<input type="checkbox" data-toggle="toggle" data-on="actualites general" data-off="actualites general" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'actualites general',
      off: 'actualites general'
    });
  })

</script><br>
<label>Gouvernement & Politique</label><br>
<input type="checkbox" data-toggle="toggle" data-on="Politiciens" data-off="Politiciens" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'politiciens',
      off: 'politiciens'
    });
  })
</script>
<input type="checkbox" data-toggle="toggle" data-on="Politique" data-off="Politique" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'politique',
      off: 'politique'
    });
  })
</script><br>
            <label>Divertissement</label><br>
       <input type="checkbox" data-toggle="toggle" data-on="Divertissement general" data-off="Divertissement general" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Divertissement general',
      off: 'Divertissement general'
    });
  })
</script><input type="checkbox" data-toggle="toggle" data-on="musique" data-off="musique" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'musique',
      off: 'musique'
    });
  })
</script><br>
<label>Science & Tech</label><br>
<input type="checkbox" data-toggle="toggle" data-on="tech" data-off="tech" data-toggle="toggle" data-onstyle="danger" data-offstyle="light">

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'politiciens',
      off: 'politiciens'
    });
  })
</script>
               
                <div id="f"> 
             <input type="submit" name="suivant"  value="Suivant" class="form-submit-button"><br>
        </div>   
    </div>
     </form>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#search").keyup(function(){
                var searchText = $(this).val();
                if (searchText!=''){
                    $.ajax({
                        url:'action.php',
                        method:'post',
                        data:{query:searchText},
                        success:function(response){
                            $("#show-list").html(response);
                        }
                    });
                }
                else{
                    $("#show-list").html('');
                }
            });
            $(document).on('click','a',function(){
                $("#search").val($(this).text());
                $("#search-list").html('');
            });
        });     
    </script>
</body>
</html>
 

