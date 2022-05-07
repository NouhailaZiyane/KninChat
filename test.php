<?php
session_start();
  if (isset($_SESSION ['nom'])&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
include("connexion.php");
$output='';
   $id=$_SESSION['id'];
   $requette="SELECT distinct following FROM follow WHERE id_utilisateur='$id';";
   $query1=mysqli_query($link,$requette);
   while ($row1=mysqli_fetch_array($query1))
   {
   	    $idd=$row1['following'];
        $query=mysqli_query($link,"SELECT * FROM utilisateur WHERE id_utilisateur='$idd';" );
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
                $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 class=n />";
                $output .= '<div class=row><div class=col-8>'.$ph.'<b>'.$nom.'</b><i class="fa fa-check-circle-o"></i><br><span>@'.$nom1.'</span><br> '.$bio.'<br></div>';
                $output.="<div class=col-3>
        <a href='message.php?id=$id1&do=msg'><input type=button id=mesage class=contacter  value=contacter ></a>
        </div></div><br>";
        }}}
          mysqli_close($link);?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>twitter home page</title>
	<style type="text/css">
		body{
    background-image: linear-gradient(to right,#e63946,blue);
    margin-top: 10px;
}
*{
	
	font-family: 'Source Sans Pro', sans-serif;
}
.fa-check-circle-o
{
	padding: 3px;
	color: blue;
}
.container
{
	display: grid;
	grid-template-columns: 26% 39% 35%;
}
.options-menu
{
	width: 99.8%;
	height: 760px;
}

.options-center
{
	width: 75%;
	margin: 0 auto;
}
.logo
{
	padding: 4% 0  4% 37%;
}
.logo i
{
    font-size: 33px;
    color: #00a7ff;
}
.option
{
	display: grid;
	margin-right: 16px;
}
.option div a{
    text-decoration: none;
    font-size: 20px;
    font-weight:600;
    padding: 12px 15px;
    border-radius: 30px;
    color: black;
}
.option div{
	padding: 2% 0 10% 0%;

}
.option div a i{
	padding: 0 20px 0 0;
	font-weight: 100;
}
.option div a:hover{
	background: #e1f5ff;
	color: blue;
}
.option button{
	padding: 15px 80px;
	border-radius: 30px;
	outline: none;
	background: #1d00ce;
	color: white;
	border: none;
	font-weight: 600;
	font-size: 16px;
	cursor: pointer;
}
.option button:hover{
	box-shadow: 0 2px 20px #1d00ce;
	background: #1d00ce;
	transition: 0.1s;
	transform: scale(1.1) ;
}
.content-menu{
	width:99.6%;
	background: white;
	border-radius: 20px;
	border-color: black;
	overflow-y: hidden;
	
}
.content-menu:hover{
	overflow-y: auto;
}

.prefer{
	width: 100%;
	height: 55px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	border-bottom: 1px solid #e8e8e8;
	position: sticky;
	top: 0;
	background: white;
	z-index: 1000;
}
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
.you-tweet-other-tweet{
	max-height: 704px;
	overflow-y: hidden;
}
.you-tweet-other-tweet:hover{
	overflow-y: auto;
}
.your-tweet{
	display:block;
	width:100%;
	border-bottom: 10px solid #e8e8e8;
	height: 130px;
}
.profile-message{
	display:flex;
	flex-wrap: wrap;
	align-items: center;
	padding: 10px 15px;
	
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
}
.add-extra{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
.images-more{
	margin: 5px 0 5px 7px;
}
.images-more span a{
	text-decoration: none;
	color: #e63946;
	font-size: 20px;
	padding: 8px 8px;
	border-radius: 50%;
}
.images-more span a:hover{
	background: #f8c9cd;
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

.others-profile{
	padding: 0 0 0 10px;
}
.others-profile img{
	width: 50px;
	height: 50px;
	border-radius: 50%;
	opacity: 0.9;
	cursor: pointer;
}
.others-profile img:hover{
	opacity: 1;
}
.name-msg span i{
	padding: 0 4px 0 4px;
	color: #1d00ce;
	font-size: 20px;
}
.name-msg{
	cursor: pointer;
}
.name-msg span p{
	color: #5d5d5d;
}
.name-msg span b{
	color: black;
}
.msg{
	color: black;
	font-size: 16px;
	font-weight: 500;
	padding: 5px 0 0 0;
	text-align: justify;
	text-justify: inter-word;

}
.name-msg span b:hover{
	text-decoration: underline;
}
.more-options{
	cursor: pointer;
}
.image-video{
	margin: 0 0 0 12%;
}
.image-video img{
	border-radius: 20px;
	width: 90%;
	max-height: 280px; 
}
.your-reaction{
	margin: 3% 0 5% 15%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	width: 70%;
	opacity: 0.7;
}
.your-reaction div{
	display: flex;
	align-items: center;
	cursor: pointer;
}
.your-reaction div p{
	padding: 0 0 0 5px;
	font-size: 12px;
}
.your-reaction div i{
    font-size: 20px;
    padding: 5px 5px;
    border-radius: 50%;
}
.row
{
	padding: 10px;
}
.comment:hover{
	color: #00a7ff;
}
.retweet:hover{
	color: green;
}
.like:hover{
	color: red;
}
.bookmark:hover{
	color: #00a7ff;
}
.trending-menu{
	width: 100%;
}
.trending-center{
	width: 70%;
	margin: 0 0 0 50px;
}
.search{
	width: 100%;
	height: 55px;
	position: sticky;
	top: 0;
	align-items: center;
	z-index: 1000;
}
.search input{
	/*---------------------*/
	width: 350px;
	height: 40px;
	border-radius: 30px;
	outline: none;
	border:none;
	background: #ebebeb;
	padding: 0 10px 0 50px;
	font-size: 15px;
    color: #454545;
    letter-spacing: 1px;
    /*---------------------*/

}
.list-group{
	width: 350px;
	margin-left: 25px;
}


.trending, .follow{
	width: 80%;
	background: #efefef;
	border-radius: 20px;
	margin: 0 0 20px 20px;
	overflow-y: hidden;
	max-height: 333px;
}
.trending:hover, .follow:hover{
    overflow-y: auto;
}
.header{
	width: 100%;
	height: 55px;
	border-bottom: 1px solid  #d8d8d8;
}
.header p{
	padding: 15px 20px;
	font-size: 18px;
	font-weight: 900;
}
.trends, .persons{
	width: 100%;
}
.trend{
	display: grid;
	grid-template-columns: 70% 30%;
	border-bottom: 1px solid #d4d4d4;
}

.trend-msg{
	margin: 15px 0 0 20px;
}
.trend-name{
	margin: pointer;
	cursor: pointer;
}
.trend-name p, .trend-with p{
	font-size: 12px;
	opacity: 0.6;
}
.trend-with{
	margin: 0 0 20px 0;
	cursor: pointer;
}
.subject p{
	font-size: 15px;
	font-weight: 600;
	text-justify: inter-word;
	word-wrap: break-word;
	margin: 0 0 10px 0;
	cursor: pointer;
}
.trend-with p a{
	text-decoration: none;
	color: #00a7ff;
}
.trend-with p a:hover{
	text-decoration: underline;
	opacity: 1;
}
.trend-picture{
	padding: 20px 0;
}
.trend-picture img{
	width: 70px;
	height: 70px;
	border-radius: 50px;
}
.trend:hover, .person:hover{
	background: #e8e8e8;
}
.show-more{
	padding: 20px 20px;
}
.show-more a{
	text-decoration: none;
	color: #00a7ff;
}
.show-more:hover{
	background: #e8e8e8;
	border-radius: 0 0 20px 20px;
}
.person{
	display: grid;
	grid-template-columns: 20% 50% 30%;
	padding: 10px 0;
	align-items: center;
	border-bottom: 1px solid #d4d4d4; 
}
.person-profile{
	padding: 0 0 0 10px;
}
.person-profile img{
	width: 50px;
	height: 50px;
	border-radius: 50%;
	opacity: 0.9;
}
.person-profile img:hover{
	opacity: 1;
}
.followers-name p{
	font-size: 16px;
	font-weight: 600;
}
.name h3{
	font-size: 16px;
}
.name p{
	opacity: 0.6;
	padding: 5px 0 0 0 ;
}
.fa-search
{
	position: relative;
	right: 750px;
	bottom: 20px;
}

     span
      {
        color: #e63946;
      }
img
{
  float: left;
  padding: 5px;
  border-radius: 50%;

}
input[type=button],input[type=submit] {
  padding: 5px 20px;
  outline: none;
  border: 2px solid #e63946;
  color: #e63946;
  border-radius: 20px;
  font-size: 17px;
  text-transform: capitalize;

}
.content
{
	margin-left: 20px;
}
input[type=submit]{
	margin-right: 10px;
}
input[type=button]:hover{
  background: #f8c9cd;
}
input[type=submit]:hover{
  background: #f8c9cd;
}
input[type=text]
{
	width: 300px;
	height: 40px;
}
.send-follow-request button{
	padding: 5px 20px;
	outline: none;
	border: 2px solid #e63946;
	color: #e63946;
	border-radius: 20px;
	font-size: 17px;
	text-transform: capitalize;
}
.send-follow-request button:hover{
	background: #f8c9cd;
}
@media(max-width: 1450px){
	.option span{
		display: none;
	}
	.option button{
		padding: 10px 10px;
	}
	.container{
		grid-template-columns: 10% 50% 40%;
	}
	.option-center{
		width: 99.6%;
	}
	.option div a i{
		padding: 0;
		border-radius: 50%;
	}
	.profile-msg{
		grid-template-columns: 25% 40% 35%;
	}
}
@media(max-width: 960px){
	.options-menu{
		display: none;
	}
	.trending-menu{
		display: none;  
	}
	.container{
		grid-template-columns: 100% ;
	}
	.profile-msg{
		grid-template-columns: 20% 60% 20%;
	}
}
.fa-search
{
	position: absolute;
	right: -3px;
}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="options-menu">
			<div class="option-center">
				<div class="logo">
				</div>
				<div class="option">
					<div><a href="" title="Accueil"><i class="fa fa-home">Accueil</i></a></div>
					<div><a href="sug.php" title="Explorer"><i class="fa fa-hashtag">Explorer</i></a></div>
					<div><a href="" title="Notifications"><i class="fa fa-bell">Notifications</i></a></div>
					<div><a href="message.php" title="Messages"><i class="fa fa-envelope-o">Messages</i></a></div>
					<div><a href="" title="Signets"><i class="fa fa-bookmark-o">Signets</i></a></div>
					<div><a href="" title="Listes"><i class="fa fa-list-alt">Listes</i></a></div>
					<div><a href="" title="Profil"><i class="fa fa-user-o">Profil</i></a></div>
					<div><a href="sessiondes.php" title="Déconnexion"><i class="fa fa-ellipsis-h">Déconnexion</i></a></div>
					<div><button>Tweeter</button></div>
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
							<?php    include("connexion.php");
   $output1='';
       $requette2="SELECT distinct following FROM follow where id_utilisateur='$id';";
       $resultat1=mysqli_query($link,$requette2);
       while ($row=mysqli_fetch_array($resultat1)) {
       	$following=$row['following'];
        $requette1="SELECT message FROM post where id_utilisateur='$following';";
       $resultat2=mysqli_query($link,$requette1);
       while ($row1=mysqli_fetch_array($resultat2)) {
       	$message=$row1['message'];
        $requette3="SELECT distinct nom, photo FROM utilisateur where id_utilisateur='$following';";
       $resultat3=mysqli_query($link,$requette3);
        while ($row2=mysqli_fetch_array($resultat3)) {
        	$photo=$row2['photo'];
        	$ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
        	$nom=$row2['nom'];
        	$nom1=str_replace(' ', '', $nom);
        	$output1.= '<div class=row><div class=col>'.$ph.'<b>'.$nom.'</b><i class="fa fa-check-circle-o"></i><br><span>@'.$nom1.'</span><br> '.$message.'</div>';
        	$output1.="<div class=k>
        <a href='trait1.php?nom=$nom&message=$message&id=$id&ph=$photo&do=follow'><input type=button  class=retweeter value=retweeter ></a></div></div>
       <br><br>";
        }
       }
       }
       echo $output1;}?>
					</div>

                   

                   <div class="other-tweet">
						<div class="profile-msg">
							<div class="others-profile">
								


				</div>
			</div>
		</div>
		</div>
		<div class="trending-menu">
			<div class="trending-center">
				<div class="search">
					<!--            -->    
					<div class="bg-ingo">
	                    <div class="container">
		                    <div class="row">
			                    <div id="f"> 
				                    <div class="from-inline p-3">
					                    <input  type="text" name="search" id="search" placeholder="Search Twitter"><br>
					              
					                    <div  style="position:relative;margin-top:-1px;margin-left:15px;width: 430px; " >
            	                        <div class="list-group" id="show-list">
            	    
            	                       </div>
                               </div>
                               </div>
                        </div>
                        </div>
                        </div>
                        </div>

					<!-- -->                
					<!--               
					<input type="search" placeholder="Search Twitter">
					<span><i class="fa fa-search"></i></span>--> 
				</div>
						<div class="trending">
					<div class="header">
						<p>Trends for you</p>
					</div>
				    <div class="trends">
						<!-- Each trend -->
						<div class="trend">
							<div class="trend-msg">
								<div class="trend-name">
									<p>Trending in Morocco</p>
								</div>
								<div class="subject">
									<p>Morocco</p>
								</div>
								<div class="trend-with">
									<p>7,483 Tweets</p>
								</div>
							</div>
							
						</div>
						<!-- End of each trend -->
						<!-- Each trend -->
						<div class="trend">
							<div class="trend-msg">
								<div class="trend-name">
									<p>Trending in Morocco</p>
								</div>
								<div class="subject">
									<p>#Maroc</p>
								</div>
								<div class="trend-with">
									<p>1,098 Tweets</p>
								</div>
							</div>
							
						</div>
						<!-- End of each trend -->
						<!-- Each trend -->
							<div class="trend">
							<div class="trend-msg">
								<div class="trend-name">
									<p>Trending in Morocco</p>
								</div>
								<div class="subject">
									<p>#Maroc</p>
								</div>
								<div class="trend-with">
									<p>1,098 Tweets</p>
								</div>
							</div>
							
						</div>
						<!-- End of each trend -->
						<!-- Each trend -->
						<div class="trend">
							<div class="trend-msg">
								<div class="trend-name">
									<p>Trending in Morocco</p>
								</div>
								<div class="subject">
									<p>Algérie</p>
								</div>
								<div class="trend-with">
									<p>12K Tweets</p>
								</div>
							</div>
							
						</div>
						<!-- End of each trend -->
						<div class="show-more">
							<a href="">show more</a>
						</div>
						<!-- End of each trend -->
					</div>
				</div>

				<!-- Follow -->
				<div class="follow">
					<div class="header">
						<p>Abonnés</p>
					</div>
					<?php 
echo $output;?>
			    </div>
            <!-- end of follow-->
		</div>
	</div>
	<!-- end of trending menu-->
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
<?php
  if (isset($_POST['submit'])) {
   include("connexion.php");
   $nom=$_SESSION['nom'];
   $password=$_SESSION['password'];
   $message=addslashes($_POST['tweeter']);
   $requette2="SELECT id_utilisateur FROM utilisateur where nom='$nom' and password='$password';";
       $resultat1=mysqli_query($link,$requette2);
       while ($row=mysqli_fetch_array($resultat1)) {
       $_SESSION['id']=$row['id_utilisateur'];}
       $id=$_SESSION['id'];
     $requette1="INSERT INTO post (id_utilisateur,message) values ('$id','$message');";
       $resultat=mysqli_query($link,$requette1); 
       
       mysqli_close($link);

    }

   ?>