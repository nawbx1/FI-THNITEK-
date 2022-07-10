<?php
session_start();
include('connect.php');
$hide='hidden';
$id = $_SESSION['id'];
if(isset($_POST['nom']) && isset($_POST['password'])&& isset($_POST['email'])&& isset($_POST['car'])&& isset($_POST['tel'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $voiture = $_POST['car'];
    $tel = $_POST['tel'];
    $mdp = $_POST['password'];
  

    $q=mysqli_query($connexion, "UPDATE conducteur SET
      nom='$nom',
      email='$email',
      mot_de_passe='$mdp',
      voiture='$voiture',
      tel='$tel'
     
      WHERE id='$id'");
      if($q==true){
        header('Location: profile.php');
      }
       
} else {
    $hide ;
    
}


?>