<?php
   $conn = new mysqli("localhost","root","","twitter");
   if ($conn->connect_error) {
   	die("failed to connect!".$conn->connect_error);
   }
   if ($_POST['query']) {
   	$inpText=$_POST['query'];
   	$query="SELECT * FROM utilisateur WHERE nom LIKE '%$inpText%' ";
   	$result= $conn->query($query);
   	if ($result->num_rows>0) {
   		while ($row=$result->fetch_assoc()) {
            $id=$row['id_utilisateur'];
            $nom=$row['nom'];
            $photo=$row['photo'];
            $ph="<img src=\"photo/$photo\" alt=\"image\" height=50 width=50 />";
   			echo "<a href='account.php?id=$id' class='list-group-item list-group-item-action border-1'>".$ph.$nom."</a>";
            
            $_SESSION['nom']=$nom;

   		}
   	}
   	else{
   		echo "<p class='list-group-item border-1'>No Record</p>";
   	}
   }
?>
<style type="text/css">
    img {
            border-radius: 50%;
            margin-right: 5px;
        }
</style>