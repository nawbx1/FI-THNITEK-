
<?php

$hide='hidden';

if(isset($_POST['email'])){
  include("connect.php");
  $email = $_POST['email'];
  $mdp = $_POST['pass'];
  $query = mysqli_query($connexion, "SELECT * FROM conducteur WHERE email='$email' AND mot_de_passe='$mdp'");
  $row = mysqli_fetch_array($query);
  if($row != NULL){
	
	
    $_SESSION['id'] = $row['id'];
    header('Location: home.php');
  }else{
    $hide='';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bout/css/semantic.css"/>
  <link rel="stylesheet" href="bout/css/bootstrap.min.css">
<link rel="stylesheet" href="bout/css/login.css"/>
<link rel="stylesheet" type="text/css" href="bout/css/index.css"/>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

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
    <a href="login.php" class="active">SIGN IN</a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="index.php">HOME</a>
  <a href="inscription.php">SIGN UP</a>
  
  <!-- Right-aligned links -->
 
  
</div>


<h1 class="wel">Fthniytek is your solution <span >
          <i class="fa fa-car" aria-hidden="true"></i>
        </span></h1></h1>

		<div class="container-login100">
		
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/cap1.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Member Login !
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
						
					
					<div class="container-login100-form-btn">
						<input type="submit" value="Login" class="login100-form-btn">
						
						
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="inscription.php">
							Create your Account
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
