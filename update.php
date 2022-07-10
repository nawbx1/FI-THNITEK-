<?php
session_start();
include('connect.php');
if(@$_SESSION['id'] == NULL){
  header('Location: login.php');
}else{
  $id = $_SESSION['id'];
  $query = mysqli_query($connexion, "SELECT * FROM conducteur WHERE id='$id'");
  $row = mysqli_fetch_array($query);
  $nom = $row['nom'];
  $email = $row['email'];
  $tel = $row['tel'];
  $mdp = $row['mot_de_passe'];

  $v = $row['voiture'];
}


?>
<head>
<title>UPDATE PROFILE</title>
<link rel="stylesheet" type="text/css" href="bout/css/semantic.css"/>
  <link rel="stylesheet" href="bout/css/bootstrap.min.css">
<link rel="stylesheet" href="bout/css/login.css"/>
<link rel="stylesheet" type="text/css" href="bout/css/index.css"/>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/m1.css">
</head>
<style>
  body{
    background-image: url('bg1.jpg');
    background-size: 110%;
    background-repeat: no-repeat;

    text-align: center;
    color:white;}
    .container-login10 {
  width:650px; 
 height:650px ;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  border-radius: 100px;
  overflow: hidden;
  margin-left: 350px;

  margin-top: 30px;
  background: #dbd8d883;
  border-radius: 10px;
  justify-content: space-between;
  padding: 5px 50px 50px 35px;
  
}
.login10-form {
      width: 100%;
    }
   
 
}
h1{
  color:red;
  font-size:25pt;
}
</style>
  <body>
  <div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="update.php" class="active">UPDATE PROFILE</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">HOME</a>
<a href="profile.php">PROFILE</a>

<!-- Right-aligned links -->


</div>
  <h1 class="wel">Fthniytek is your solution <span >
          <i class="fa fa-car" aria-hidden="true"></i>
        </span></h1></h1>
  <div class="container-login10">
		<form class="login10-form validate-form" action="up.php" method="POST">
      
    <h1> EMAIL </h1>
      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
      
        <input class="input100" type="text" name="email" placeholder="<?php echo $email ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
      </div>
      <h1> USERNAME </h1>
      <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
      <input class="input100" type="text" name="nom" placeholder="<?php echo $nom ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-address-card-o" aria-hidden="true"></i>
        </span>
      </div>
      <h1> CAR TYPE</h1>
      <div class="wrap-input100 validate-input" data-validate = "Valid car is required">
        <input class="input100" type="text" name="car" placeholder="<?php echo $v ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-car" aria-hidden="true"></i>
        </span>
      </div>
      <h1> PHONE NUMBER </h1>
      <div class="wrap-input100 validate-input" data-validate = "Valid phone number  is required">
        <input class="input100" type="text" name="tel" placeholder="<?php echo $tel ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-mobile-phone" aria-hidden="true"></i>
        </span>
      </div>
      <h1> PASSWORD </h1>
      <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="password" placeholder="<?php echo $mdp ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
      </div>
        
      
      <div class="container-login100-form-btn">
        <input type="submit" class="login100-form-btn" value="UPDATE">
        
       
      </div>

      
    
    </form>
  
</div>





<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
$('.js-tilt').tilt({
  scale: 1.1
})
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
  </body>
</html>