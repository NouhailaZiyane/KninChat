 <?php 
  if (isset($_POST['submit'])) {
    session_start();
     $nom=$_POST['nom'];
     $password=$_POST['password'];
     include("connexion.php");
     $requette="SELECT * FROM utilisateur where nom='$nom' and password='$password';";
     $query=mysqli_query($link,$requette);
     $count= mysqli_num_rows($query);
        if ($count==0) {
          $output= 'nom ou le mot de passe est incorrect';
          echo $output;
        }
        else{
          while ($row=mysqli_fetch_array($query)) {
            $_SESSION['photo']=$row['photo'];
            $_SESSION['bio']=$row['bio'];
            $_SESSION['date_naissance']=$row['date_naissance'];
            $_SESSION['nom']=$nom;
          $_SESSION['password']=$password;
          $_SESSION['tel']=$row['tele'];
          $_SESSION['id']=$row['id_utilisateur'];
          header('location: twitter.php');
          }
        }
   } ?>