<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
	$username =  $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `signup` WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connection, $sql);
	if($result==1){
		header("Location: main.php");
	}else{
		echo"Invalid Username/Password";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<link rel="stylesheet" href=style.css>
</head>
<body>
	
<div class="container">
      <form class="form-signin" method="POST" target="_self">
        <h2 class="form-signin-heading">Login</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
</div>
</body>
</html>
