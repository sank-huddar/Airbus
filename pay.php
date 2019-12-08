<?php
// Start the session
session_start();

$user = $_SESSION['user'];




?>












<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>Pay</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="forcompany.css">
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="AdminSignin.css">
  <script src="login.js"> </script>
  <script src="jump.js"> </script>
</head>
<body>
  <nav id="main-nav"class="navbar navbar-default navbar-fixed-top">
 		<div class="container">
 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="index.html"><span "></span> Home</a>
 			</div>
 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="about.html"><span ></span> About Us</a>
 			</div>
 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="homepage.html"><span ></span> Booking</a>
 			</div>


 		<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="signup.html"><span ></span> Register</a>
 			</div>

 		<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="customersignin.html"><span ></span> Login</a>
 			</div>

 				<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="showHistory.php"><span ></span> History</a>
 			</div>
 		</div>

 	</nav>
 	<div id="main-jumbo" class="jumbotron text-center">
 		<h1>Airbus</h1>
 		<p>We make you Fly!</p>
 	</div>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left">
      <h1>Payment Finish</h1>
      <div><img src="smile.jpg" alt="smile" id="smile">
      </div>




<?php

include_once 'dbconnect2.php';


    $sql = mysqli_query($con,"UPDATE book
            SET paid = '1'
            WHERE username = '$user'");



mysqli_close($con);
?>




    </div>

  </div>
</div>

<footer id="main-footer" class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>Airbus</p>
	</footer>



</body>
</html>
