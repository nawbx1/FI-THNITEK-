

<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" type="text/css" href="bout/css/semantic.css"/>
<link rel="stylesheet" type="text/css" href="bout/css/index.css"/>
<link rel="stylesheet" type="text/css" href="css/m1.css">
<link rel="stylesheet" href="bout/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<style>
  body{
    background-image: url('bg1.jpg');
    background-size: 150%;
    background-repeat: no-repeat;

    text-align: center;
    color:white;
   
}
table{
    
    width:550px;
    margin-left:30%;
    margin-bottom:1rem;
 border-radius:25px;



}
.t{
    
    width:550px;
    margin-left:30%;
    margin-bottom:1rem;
 border-radius:25px;
 background-color:#3a3c42;



}
.t:hover{
 background-color:#41454d;



}
h2 { 
        font-size: 30pt;
    text-shadow: 2px 3px 20px white;
  color: BLACK;


}



    h1{
    
    font-size: 35pt;
    text-shadow: 2px 3px 20px black;



}
h3{ 
    
    font-size: 30pt;
    color:black;
    text-shadow: 2px 3px 20px black;



}


</style>
<body> 
  <div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
      <a href="home.php" class="active">HOME</a>
    </div>
    
    <!-- Left-aligned links (default) -->
    <a href="logout.php">LOG OUT </a>
    <a href="trajet.php">ADD PATH</a>
    <a href="profile.php">PROFILE </a>
    
    
    
    
    
    </div>
      <h1 class="wel">Fthniytek is your solution<span >
          <i class="fa fa-car" aria-hidden="true"></i>
        </span></h1>
      <br>
      <form method="get" action="trajet.php">
        <button class="ui inverted button btnn"><p>ADD A PATH <B>+</B></p></button>
    </form>
      
    <hr style="margin-top: 50px; margin-bottom: 60px;"  color="BLACK" width="1500"/>
    <h1 >YOUR PATHS</h1>
    <?php
   $id= $_SESSION['id'];
include("connect.php");
$sql = "SELECT t.* , C.nom,C.voiture,C.tel FROM trajet T , conducteur C where T.conducteur_fk=C.id and C.id=$id ";
$result = mysqli_query($connexion, $sql);

if ($result->num_rows > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    
    ?>
  <font size="6">
 <table  class="t" >
 <tr>
 <td>
 
   
  
              <?php 

echo  "  " . $row["ville_depart"]. " To " . $row["ville_arrive"]. "<br>";
  

?>
         
          
          <?php
      echo  " By  " . $row["nom"].  "<br>";
      ?>         
        
          <?php
      echo "<b>". $row["prix"]. " DT</b> | " . $row["date"]. " at " . $row["temps"]. " | " . $row["nb_place"]. " Places <br>";
      echo "<b>". $row["voiture"].  "  <br>";
      ?> <div class="form-group">
      
      <button type="button" class="btn btn-outline-success " data-toggle="dropdown">
       <?php 
        echo  "<b>contact " . $row["tel"].  "<br>";?>
      </button> <BR>
      <a href="edit.php ?id=$id"><input type="submit" class="btn btn-warning" VALUE="edit"  ></a>
  
      <a onClick="return confirm('Are you sure you want to delete?')" href='delete.php'><input type="submit" class="btn btn-danger" VALUE="DELETE"  ></a>
      
    
      </td>
      </tr>

      </table>
  </font>
      <?php
      }
  }
  else {
      echo "<b> <h2> YOU DONT HAVE ANY PATHS RIGHT NOW <h2>";
  }
      ?> 
    
</body>
</html>