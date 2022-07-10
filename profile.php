<?php
session_start();

if($_SESSION['id'] == NULL){
  header('Location: login.php');
}else{
  include('connect.php');
  $id = $_SESSION['id'];
  $query = mysqli_query($connexion, "SELECT * FROM conducteur WHERE id='$id'");
  $row = mysqli_fetch_array($query);
  $nom = $row['nom'];
  $mdp = $row['mot_de_passe'];
  $voiture = $row['voiture'];
  $tel = $row['tel'];
  $email = $row['email'];
  
}
?>
<html>
  <head>
    <title>
      Profile
    </title>
    <link rel="stylesheet" href="bout/css/bootstrap.min.css">
    <link rel="stylesheet" href="bout/css/profile.css"/>
    <link rel="stylesheet" type="text/css" href="css/m1.css">
  </head>
  <style>
    label,.update{
  display: inline-block;
  background-color: #686667;
  margin-top: 15px;
  font-size: 1.2em;
  font-weight: bold;
  color: #fff;
  width: 100%;
  padding: 5px 0px 5px 0px;
 }
 .cont {
    margin-top:5%;
      margin-bottom: 10%;
    display:inline-block;
    padding: 30px 30px 30px 30px;
    width: 500;
    opacity: 0.75;
  background-color: rgb(255, 255, 255);
  
    text-align: center;
    box-shadow: -1px 5px 20px #ebe8e9;
    border-radius: 25px;
    border: 2px solid black;
   
  }
  h1 {
    font-size:25pt;
    color:black;
    


   
  }
 body{
    background-image: url('bg1.jpg');
    background-size: 150%;
    background-repeat: no-repeat;

    text-align: center;
    color:white;
   
}
  
</style>
  <body>
  <div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="profile.php" class="active">PROFILE</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">HOME</a>
<a href="logOUT.php">log out</a>



<!-- Right-aligned links -->


</div>0
    
    <form action="update.php" method="POST">
      <div class="cont" >

        <label ><h1><dt>NAME </h1><?php echo $nom ?></label>
        <label><h1><dt>EMAIL </h1><?php echo $email ?></label>
        <label > <h1><dt>CAR TYPE </h1> </b><?php echo $voiture ?></label>
        <label ><h1><dt>PHONE NUMBER </h1><?php echo $tel ?></label>
        <label ><h1><dt>PASSWORD </h1><?php echo $mdp ?></label>
      
        <input type="submit" class="btn btn-outline-warning" value="UPDATE"/>
      </div>
    </form>
  </body>
</html>
