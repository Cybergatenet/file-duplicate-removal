<?php
session_start();
require('connect.php');
if (isset($_POST['btns'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (!empty($username) && !empty($password)) {
		$sql = mysqli_query($con,"SELECT * FROM users WHERE name = '$username' AND password ='$password'");
		$getRow = mysqli_num_rows($sql);
		$getData = mysqli_fetch_assoc($sql);
		if ($getRow > 0) {
			echo $emaildb = $getData['name'];
			if ($username == $emaildb) {
			    $_SESSION['username'] = $getData['name'];
			    $_SESSION['qrcode'] = $trId;
			    echo "<script>window.location.href='myHome/index.php';</script>";
			}
		}else{
			echo "<script>alert('Unauthorize Access!!')</script>";
		}
	}else{
		echo "<script>alert('fields cant be empty')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="container">
	<div class="con">
		<h3>FILE DUPLICATE REMOVER USING FILE CHECKSUM</h3>
	</div>
	<div class="lg_form">
		<span>Login</span>
		<form action="" method="POST">
			<div class="form-group">
				<input type="text" name="username" placeholder="Enter Username" required>
			</div>
			<div class="form-group">
				<input type="password" name="password"  placeholder="Enter Password" required>
			</div>
			<div class="form-group">
				<button type="submit" name="btns" class="btn btn-success">Login</button>
			</div>
			<br>
			<b style="color: #fff">Don't have accoun:</b><a href="#" style="color: gold">Sign up</a>
		</form>
	</div>
</div>

<script type="text/javascript" src="js/myquery.js"></script>
</body>
</html>