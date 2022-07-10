
<html>
<?php 

if (isset($_POST['email']) && isset($_POST['password'])){
    $username = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $voiture = $_POST['car'];

      include("connect.php");
      $sql = "INSERT INTO conducteur (nom,email,mot_de_passe,voiture,tel) VALUES ('$username', '$email', '$password', '$voiture',$tel)";
      if ($connexion->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }
    
  } 
    
?>
    

<head>
<title>SIGN UP</title>
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

   
 
}
</style>
  <body>
  <div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="inscription.php" class="active">SIGN UP</a>
</div>

<!-- Left-aligned links (default) -->
<a href="index.php">HOME</a>
<a href="login.php">SIGN IN</a>

<!-- Right-aligned links -->


</div>
  <h1 class="wel">Fthniytek is your solution <span >
          <i class="fa fa-car" aria-hidden="true"></i>
        </span></h1></h1>
  <div class="container-login100">
		
    <div class="login100-pic js-tilt" data-tilt>
      <img src="images/cap1.png" alt="IMG">
    </div>

    <form class="login100-form validate-form" action="inscription.php" method="POST">
      <span class="login100-form-title">
        THANKS FOR JOINING US ! 
        
      </span>
     
      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
      </div>
      <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
        <input class="input100" type="text" name="nom" placeholder="USERNAME">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-address-card-o" aria-hidden="true"></i>
        </span>
      </div>
      <div class="wrap-input100 validate-input" data-validate = "Valid car is required">
        <input class="input100" type="text" name="car" placeholder="CAR TYPE">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-car" aria-hidden="true"></i>
        </span>
      </div>
     
      <div class="wrap-input100 validate-input" data-validate = "Valid phone number  is required">
        <input class="input100" type="text" name="tel" placeholder="PHONE NUMBER">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-mobile-phone" aria-hidden="true"></i>
        </span>
      </div>
      <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="password" placeholder="Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
      </div>
        
      
      <div class="container-login100-form-btn">
        <input type="submit" class="login100-form-btn" value="SIGN UP">
        
        </button>
      </div>

      <div class="text-center p-t-12">
        <a class="txt2" href="login.php">
         LOGIN INTO YOUR ACCOUNT
          <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
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