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
               height: 60px;
               border-radius: 9px;
                font: bold 23px black ;
                
            }
            
        .form-control:hover{
               box-shadow:  0 0 10px #fff;
            } 
            span
            {
              color:  #e63946; 
              font-weight: bold;

            }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<div class="container">
   <form action="login.php" method="post">
    <div class="row">
   <div class="col-12">
    <label for="cne"> Entrez votre CNE : </label>
  </div>
    <div class="col-12">
   <input type="text" class="form-control" placeholder="CNE(composé de 10 chiffres)" id="cne" name="cne" required="required" >
</div></div><br>
<br>
<div class="row"><div class="col-lg-4 col-12"></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Valider"></div></div></form>

  </div></body></html>