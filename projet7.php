<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Sujets qui vous intéressent</title>
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
		.form-control , .form{
              
              border-radius: 18px;
              height: 30px; 
              font: bold 17px  arial, sans-serif;
            }
            .form-control:hover{
              box-shadow:  0 0 10px #fff;
            }	
            .fa-search
            {
            	color: black;
            	position: relative;
            	top:27px;
            	left: 3px;
            }
            .form-submit-button{
          border-radius: 15px;
            background: #e63946;
            color: white;
            border-style: outset;
            border-color: #e63946;
            height: 50px;
            font: bold 19px  arial ,sans-serif;
            text-shadow: none ;
            margin-top: 15px;
           
            }
            .form-submit-button:hover
            {
              transform: scale(1.1) ;
            }
            .form-control {
    padding-left: 2.375rem;
}
.table
{
	background-color: white;
}
input[type=button]
{
  border-radius: 30px;
  padding: 5px;
  padding-right:7px; 
  padding-left:7px;
}
button
{
  border-radius: 30px;
  margin: 6px;

}
.toggle.danger, .toggle-on.danger, .toggle-off.danger { border-radius: 20px; }
  .toggle.danger .toggle-handle { border-radius: 20px; }
  .list-groupp
  {
  	height:200pt;
  	overflow:auto 
  }
	</style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

	<?php 
   session_start();
	if (isset($_SESSION ['nom'])&&(isset($_SESSION['tel'])||isset($_SESSION['email']))&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
	  	 ?>
	<div class="container">
		<div class="row"><div class="col-12">
			<h4>Quels sont les sujets qui vous intéressent?</h4></div></div><br>
			<div class="row"><div class="col-12">
				<p>Séléctionnez les sujets qui vous intéressent afin de personnaliser votre expérience Twitter, notamment pour trouver des personnes à suivre .<p></div></div>
 	<div class="row"><div class="col-12">
<div class="ui-widget">
  <label for="tags"></label>
  <span class="fa fa-search form-control-feedback"></span>
  <input id="tags"  type="text" name="search"  class="form-control" placeholder="Recherchez des centres d'intérêt.">
  <div  style="position:relative;margin-top:-1px;margin-left:15px;width: 430px;" >
            	<div class="list-group" id="show-list">
            	    
            	</div>
            </div>
</div><div id="result"></div>
<script type="text/javascript">
		$(document).ready(function(){
			$("#tags").keyup(function(){
				var searchText = $(this).val();
				if (searchText!=''){
					$.ajax({
						url:'fetch.php',
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
			$(document).on('click','form-control',function(){
                $("#tags").val($(this).text());
                $("#search-list").html('');
			});
		});		

        $(document).ready(function(){
            $("#tags").keyup(function(){
                var searchText = $(this).val();
                if (searchText!=''){
                    $.ajax({
                        url:'fetch.php',
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
            $(document).on('click','form-control',function(){
                $("#tags").val($(this).text());
                $("#search-list").html('');
            });
        });     
    </script>


</div></div><br>
<?php 
$nom=$_SESSION ['nom'];
$password=$_SESSION['password'];
$bio=$_SESSION['bio'];
   include('connexion.php');
   $requette="SELECT * FROM utilisateur where nom='$nom' and password='$password' and bio='$bio';";
       $resultat=mysqli_query($link,$requette);
       while ($row=mysqli_fetch_assoc($resultat)) {
       $id=$row['id_utilisateur'];
       $_SESSION['id']=$id;
   }
   $id=$_SESSION['id'];
   $requette1="SELECT lib_sujet FROM centreint WHERE id_utilisateur='$id'";
       $resul=mysqli_query($link,$requette1);
       if ($resul->num_rows>0) {
        echo "
<div class=row>
  <div class=col-12><h5>Added By You</h5></div>
  </div>";
      while ($row=$resul->fetch_assoc()) {
        $sujet=$row['lib_sujet'];
        echo "
 <a href='delete1.php?int1=$sujet'> <button class='btn btn-danger'>$sujet</button></a>";
      }
      echo "<br><br>";
    }
 ?>
<div class="row">
  <div class="col-12"></div></div>
<div class="row">
   <form action="projet8.php" method="post">
	<div class="col-12"><h5>Actualités</h5></div>
	</div>
<div class="row"><div class="col-lg-6 col-12">
  <a href="interet.php?int=Actualites General">
  <input type="button"  name="centres1" value="Actualités Général" ></a>
</div>


<div class="col-lg-6 col-12">
  <a href="interet.php?int=Journalistes">
  <input type="button"  name="centres1" value="Journalistes" ></a>

</div></div><br>
	<div class="row">
	<div class="col-lg-6 col-12">
    <a href="interet.php?int=Actualites Internationale">
  <input type="button"  name="centres1" value="Actualités Internationale" ></a>
	</div>

</div><br><br>
	<div class="row">
	<div class="col-12"><h5>Sport</h5></div>	
	</div>
		<div class="row">
	<div class="col-lg-6 col-12">
    <a href="interet.php?int=Sports Locaux">
  <input type="button"  name="centres1" value="Sports Locaux" ></a>

 </div>
	<div class="col-lg-6 col-12">
    <a href="interet.php?int=Football">
  <input type="button"  name="centres1" value="Football" ></a>
</div></div><br><br>
 
	<div class="row">
	<div class="col-12"><h5>Gouvernement & Politique</h5></div>	
	</div>
	<div class="row">
	<div class="col-lg-6 col-12">
    <a href="interet.php?int=Politiciens">
  <input type="button"  name="centres1" value="Politiciens" ></a>
	</div>
	
	<div class="col-lg-6 col-12">
    <a href="interet.php?int=Politique">
  <input type="button"  name="centres1" value="Politique" ></a>
	</div></div><br><br>
	 
<div class="row">
  <div class="col-12"><h5>Arts & culture</h5></div> 
  </div>
  <div class="row">
  <div class="col-lg-6 col-12">
    <a href="interet.php?int=Animation studios">
  <input type="button"  name="centres1" value="Animation studios" ></a>
 </div>
  
  <div class="col-lg-6 col-12">
    <a href="interet.php?int=Drawing and illustration">
  <input type="button"  name="Drawing & illustration" value="Drawing & illustration" ></a>
 </div></div><br><br>
	     <div class="row"><div class="col-lg-4 col-12"><a href="projet6.php"><img src="fleche-2.png" width="60" height="30"></a></div><div class="col-12 col-lg-5">
<input type="submit" name="submit"   class="form-submit-button" role="button" value="Suivant"></div></div>
</form></div></div>
</body>
</html>
<?php
 }
 ?> 