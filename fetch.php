<?php
   $conn = new mysqli("localhost","root","","twitter");
   if ($conn->connect_error) {
   	die("failed to connect!".$conn->connect_error);
   }
   echo "<div class=list-groupp>";
   if ($_POST['query']) {
   	$inpText=$_POST['query'];
   	$query="SELECT * FROM sujet WHERE lib_sujet LIKE '%$inpText%' ";
   	$result= $conn->query($query);
   	if ($result->num_rows>0) {
   		while ($row=$result->fetch_assoc()) {
        $sujet=addslashes($row['lib_sujet']);
   			echo "<a href='interet1.php?sujet=$sujet' class='list-group-item list-group-item-action border-1'>".$row['lib_sujet']."</a>";
   		}
   		echo "</div>";
   	}
   	else{
   		echo "<p class='list-group-item border-1'>No Record</p>";
   	}
   }
?>
