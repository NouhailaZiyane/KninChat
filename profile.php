
<?php
  if (isset($_SESSION ['nom'])&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
include("connexion.php");
include("user.php");
$output='';

$nom=$_SESSION ['nom'];
    $date=$_SESSION ['date_naissance'];
    $requette2="SELECT * FROM utilisateur where nom='$nom' and date_naissance='$date';";
       $resultat1=mysqli_query($link,$requette2);
       while ($row=mysqli_fetch_array($resultat1)) {
       $_SESSION['id']=$row['id_utilisateur'];
       $_SESSION['photo']=$row['photo'];

   }
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
        
<div class="col-sm-4">	<div class="card">
		<div class="card-body">
			<div class="h5">
				<span>
							<?php
							$photo1=$_SESSION['photo'];
							$ph1="<img src=\"photo/$photo1\" alt=\"image\" height=60 width=60 />";
                             echo $ph1;
							  ?></span>
			</div>
			<div class="h5"><a href="index.php">@<?php echo  $_SESSION["nom"]; ?></a></div>
			<div class="h7 text-muted"><?php echo  $_SESSION["nom"]; ?></div>
			<div class="h7"><?php echo  $_SESSION["bio"]; ?></div>
		</div>
		<ul class="list-group list-group-flush">
			
			<li class="list-group-item">
				
				<div class="h5">
				<a href="following.php" id="following">
						<div class="h6 text-muted">Liste de Suggestion</div>
				</a>
				</div>
			</li>					
			<li class="list-group-item"><a href="sessiondes.php">Logout</a></li>
		</ul>
	</div>
</div><br><br>
<?php
}
?>