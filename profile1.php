<?php
  if (isset($_SESSION ['nom'])&&isset($_SESSION ['date_naissance'])&&isset($_SESSION['password'])&&isset($_SESSION ['photo'])&&isset($_SESSION ['bio'])) {
include("connexion.php");
$output='';
   $id=$_GET['id'];
        $query=mysqli_query($link,"SELECT * FROM utilisateur WHERE id_utilisateur='$id';" );
      $count= mysqli_num_rows($query);
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
        }
          mysqli_close($link);?>
        

<?php
}
?>