<?php 
session_start();
require_once("connection.php");?>
<style type="text/css">
	body{
		background-image: url("wall.jpg");
		height: 100%;
		background-repeat: none;
		background-position: center;
		padding: 0;
		margin: 0;
	}
	.logo{
	height: 200px;
	position: absolute;
	border-radius: 50%;
	border: solid #333 10px;
	margin-left: 34em;
	margin-top: 5em;
	top: 0;
}
.left{
	margin-top: 300px;
	position: absolute;
	margin-left: 320px;
}
.input{
	padding: 5px;
	float: right;
	border-radius: 20px;
	border: none;
}
.btn3{
	bottom: 0;
	margin-bottom: 10px;
	position: absolute;
	margin-left: 120px;
	background-color: chocolate;
	border-radius: 50px;
	border: solid white 2px;
	padding: 15px 30px;
	font-size: 24px;
	margin-left: 200px;
}
.btn2{
	bottom: -20;
	margin-bottom: 150px;
	position: absolute;
	margin-left: 460px;
	background-color: chocolate;
	border-radius: 50px;
	border: solid white 2px;
	padding: 15px 30px;
	font-size: 24px;
	margin-left: 400px;
}
.btn2 a{
	text-decoration: none;
	color: rgba(51,51,51,51);
}
</style>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
</head>
<body>
	<form method="post">
<div class="container">
			<div class="left">
				<center>
					<label>Username</label>
				<input type="text" class="input"  name="username">
				<br><br>
				<label>Password</label>
				<input type="password" class="input"  name="password">
				<button class="btn3" type="submit" name="login">LOGIN</button>
				</center>
				
			</div>
				<button  class="btn2"><a href="register.php">REGISTER</a></button>
				</div>
				</div>
	<img class="logo" src="logo.jpg">

		</form>


	<?php
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$q = 'SELECT * FROM `site` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'"  ';

			$r = mysqli_query($con, $q);
			if ($r) {
				if (mysqli_num_rows($r) > 0){
					$_SESSION['username'] = $username;
					header("location:add.html");
				}else{
					echo '<center><p style="color:red" class="p">Your username or password is Incorrect<p></center>'; 
				}
			}else{
				echo $q; 
			}
		}
	?>

</body>
</html>