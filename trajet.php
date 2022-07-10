<!DOCTYPE html>
<html >
<?php 
session_start();
$id= $_SESSION['id'];
include("connect.php");
if (isset($_POST['vd']) && isset($_POST['va'])){
$vd = $_POST["vd"];
$va = $_POST['va'];
$date = $_POST['date'];
$temps = $_POST['temps'];
$prix = $_POST['prix'];
$nb = $_POST['nb'];

include("connect.php");

  
  $sql = "INSERT INTO trajet (ville_depart,ville_arrive,date,temps,nb_place,prix,conducteur_fk)  VALUES ('tunis', 'bengeurden', '$date', '$temps',$nb,$prix,$id)";
  if ($connexion->query($sql) === TRUE){
    header('Location: home.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connexion);
}

} 



?> 
<head>
  <title>PATH</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bout/css/semantic.css"/>
  <link rel="stylesheet" href="bout/css/bootstrap.min.css">
<link rel="stylesheet" href="bout/css/trajet.css"/>
<link rel="stylesheet" type="text/css" href="bout/css/index.css"/>
<link rel="stylesheet" type="text/css" href="css/m1.css">

  
    
    
</head>
<style>
  body{
    background-image: url('bg1.jpg');
    background-size: 80%;
    text-align: center;
    color:white;
   
}
</style>
<body >
<div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="trajet.php" class="active">ADD PATH</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">HOME</a>




<!-- Right-aligned links -->


</div>
        <h1 class="wel">Fthniytek is your solution</h1>
<div  class="container ">
  <form action="trajet.php" method="POST">
    <div  class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text text-body"><dt>ville depart</dt></span>
      </div>
      <input type="text" name="vd" class="form-control" placeholder="ville depart" REQUIRED>
       <div class="input-group-prepend">
        <span class="input-group-text text-body"><dt>ville arrive</dt></span>
      </div>
      <input type="text" name="va" class="form-control" placeholder="ville arrive" REQUIRED>
       <div class="input-group-prepend">
        <span class="input-group-text text-body"><dt>date</dt></span>
      </div>
      <input type="text" name="date"class="form-control" placeholder="jj/mm/aaaa"REQUIRED>
      <div class="input-group-prepend">
        <span class="input-group-text"><dt>temps</dt></span>
      </div>
      <input type="text" name="temps" class="form-control" placeholder="temps"REQUIRED>
      <div class="input-group-prepend">
        <span class="input-group-text"><dt>prix</dt></span>
      </div>
      <input type="text" name="prix" class="form-control" placeholder="prix"REQUIRED>
      <div class="input-group-prepend">
        <span class="input-group-text"><dt>nombre de place</dt></span>
      </div>
      <input type="text" name="nb" class="form-control" placeholder="nombre de place"REQUIRED>
      
    </div> 
    
    <p class="text-center"><input type="submit"  value="ADD" class="btn btn-outline-success"></p>
   
  </form>
  
  
</div>

</body>
</html>
