<?php
	session_start();
	$conn =  mysqli_connect('localhost','root','','testeamz');
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self');</script>";
	}
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Seja Bem-Vindo</h2>
  <a class="btn btn-danger" href="logout.php">Logout</a>
  
  
  
  
</div>

</body>
</html>
