
<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
	$username =  $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO `signup` ( username, email, password) VALUES ('$username' , '$email' , '$password')";
	$result = mysqli_query ( $connection , $sql);
	if($result){
        	    echo '<span style="color:green ;text-align:center;">User Registered Successfully.</span>';
        	}
		else{
        	    echo '<span style="color:red;text-align:center;">User Registered Already!.</span>';
        	}
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=style.css>
</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Sign up</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
</body>
</html>
