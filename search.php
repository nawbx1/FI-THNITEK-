<!DOCTYPE html>
<html>
<head>
<title>FTHNEYTI</title>
<link rel="stylesheet" type="text/css" href="bout/css/semantic.css"/>
<link rel="stylesheet" type="text/css" href="bout/css/index.css"/>
<link rel="stylesheet" type="text/css" href="css/m1.css">
<link rel="stylesheet" href="bout/css/bootstrap.min.css">

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
    h1{
    
    font-size: 35pt;
    text-shadow: 2px 3px 20px black;
}
    h2 { 
        font-size: 30pt;
    text-shadow: 2px 3px 20px white;
  color: BLACK;


}


</style>
<body> 
  <div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
      <a href="index.php" class="active">HOME</a>
    </div>
    
    <!-- Left-aligned links (default) -->
    <a href="inscription.php">SIGN UP</a>
    <a href="login.php">SIGN IN</a>
    
    
    
    <!-- Right-aligned links -->
    
    
    </div>
    
      <h1 class="wel">Fthniytek is your solution <span >
          <i class="fa fa-car" aria-hidden="true"></i>
        </span></h1><BR>
  

      <table>
       <tr>
         <td>
      <form action="search.php" method="POST">
  <div class="input-group mb-3 input-group-lg">
        <input type="text" class="form-control " name="dist" placeholder="ENTER YOUR DISTINATION" >
        <div class="input-group-append">
    <input  class="btn btn-success" type="submit" value="GO">
  </div>
  </div>
</form>
</td>
</tr>
</table>
      <hr style="margin-top: 50px; margin-bottom: 60px;"  color="BLACK" width="1500"/>
        <h1 >YOUR RESULTS</h1>
     
      <?php
      $dist=$_POST['dist'];
include("connect.php");
$sql = "SELECT t.* , C.nom,C.tel,C.voiture FROM trajet T , conducteur C where T.conducteur_fk=C.id AND t.ville_arrive='$dist'  ";
$result = mysqli_query($connexion, $sql);
if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {?>
    <font size="6">
   <table  class=" table-hover table-dark" >
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
        </button>
      
        </td>
        </tr>

        </table>
    </font>
        <?php
        }
    }else {
        echo "<b> <h2> THERS NO DISTINATION TO THAT PLACE RIGHT NOW <h2>";
    }
        ?> 
      
</body>
</html>