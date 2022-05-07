<style type="text/css">
  body
  {
    background-color: black;
  }
  .btn
  {
  border-radius: 30px;
  background: #1d00ce;
  color: white;
  border: none;
  font-weight: 600;
  font-size: 16px;
  padding: 5px;
  }
  .label
  {

   font-weight: 600;
  font-size: 16px; 
  position: relative;
  top: 8px;
  }
  .btn:hover
  {
    background-color: #e63946;
  }
  span
  {
    color: #e63946;
  }
.col-3
  {
    width: 600px;
    margin-left: 50px;

  }
  img
   {
    border-radius: 30px;
   }
</style>
<body>
<?php 
          session_start();

include("connexion.php");
$output='';
$output = '
<table class="table table-bordered table-striped">
 <tr>
 <th>photo</th>
  <th>Username</th>
  <th>Action</th>
 </tr>
';
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
 $photo=$row['photo'];
 $ph="<img src=\"photo/$photo\" alt=\"image\" height=60 width=60 />";
 $output .= '
 <tr>
 <td>'.$ph.'</td><td>'.$row['nom'].'<br><span>@'.$row['nom'].'</span></td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id_utilisateur'].'" data-tousername="'.$row['nom'].'">Start Chat</button></td>
 </tr>
 ';
}



}}$output .= '</table>';echo $output;?></body>