<?php
session_start();
include('connect.php');

if (isset($_POST['va']) && isset($_POST['vd'])){

$id= $_SESSION['id'];
$vd = $_POST["vd"];
$va = $_POST['va'];
$date = $_POST['date'];
$temps = $_POST['temps'];
$prix = $_POST['prix'];
$nb = $_POST['nb'];

$sql= " UPDATE trajet SET 
ville_depart='$vd',
ville_arrive='$va',
date='$date',
temps='$temps',
nb_place='$nb',
prix='$nb'

  WHERE conducteur_fk=$id";
 if (mysqli_query($connexion, $sql))  {
    echo "New record created successfully";
    header('Location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;

} }

else {
  echo"$connexion->error";
}



if(@$_SESSION['id'] == NULL){
  header('Location: login.php');
}else{
    
    $id= $_SESSION['id'];
  $query = mysqli_query($connexion, "SELECT * FROM trajet WHERE conducteur_fk='$id'");
  $row = mysqli_fetch_array($query);
  $vd = $row['ville_depart'];
  $va = $row['ville_arrive'];
  $temps = $row['temps'];
  $date = $row['date'];
  $nb = $row['nb_place'];
  $prix = $row['prix'];
  
}


?><head>
  <title>EDIT PATH</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/m1.css">
  <link rel="stylesheet" href="bout/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="bout/css/index.css"/>

  
    
    
</head>
<style>
  body{
    background-image: url('bg1.jpg');
    background-size: 80%;
    text-align: center;
    color:white;
   
}
.container{
    margin-top: 10%;
      margin-bottom: 10%;
    display:inline-block;
    padding: 30px 30px 30px 30px;
    width: 100%;
    opacity: 0.75;
  background-color: rgb(255, 255, 255);
  
    text-align: center;
    box-shadow: -1px 5px 20px #ebe8e9;
    border-radius: 25px;
    border: 2px solid black;
  }
</style>
<body >
<div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="edit.php" class="active">EDIT</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">HOME</a>




<!-- Right-aligned links -->


</div>

        <h1 class="wel">Fthniytek is your solution</h1>
<div  class="container ">
  <form action="edit.php" method="POST">
    <div  class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text text-body"><dt>departure city</dt></span>
      </div>
      <input type="text" name="vd" class="form-control" placeholder="<?php echo $vd ?>"REQUIRED>
       <div class="input-group-prepend">
        <span class="input-group-text text-body"><dt>comming city</dt></span>
      </div>
      <input type="text" name="va" class="form-control" placeholder="<?php echo $va ?>" REQUIRED>
       <div class="input-group-prepend">
        <span class="input-group-text text-body"><dt>date</dt></span>
      </div>
      <input type="text" name="date"class="form-control" placeholder="<?php echo $date ?>"REQUIRED>
      <div class="input-group-prepend">
        <span class="input-group-text"><dt>time</dt></span>
      </div>
      <input type="text" name="temps" class="form-control" placeholder="<?php echo $temps ?>"REQUIRED>
      <div class="input-group-prepend">
        <span class="input-group-text"><dt>price</dt></span>
      </div>
      <input type="text" name="prix" class="form-control" placeholder="<?php echo $prix ?>"REQUIRED>
      <div class="input-group-prepend">
        <span class="input-group-text"><dt>nomber of seats</dt></span>
      </div>
      <input type="text" name="nb" class="form-control" placeholder="<?php echo $nb ?>"REQUIRED>
      
    </div> 
    
    <p class="text-center"><input type="submit" class="btn btn-outline-success" value="update"></p>
   
  </form>
  
  
</div>

</body>
</html>
