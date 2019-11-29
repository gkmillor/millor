<?php require_once("connection.php");?>
<!DOCTYPE html> 
<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
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
	margin-left: 35em;
}
.form{
	height: 30em;
	width: 30em;
	background-color: white;
	margin-left: 27em;
	margin-top: 8em;
	border: solid #333 10px;
	position: absolute;
}
.container{
	margin-top: 1.5em;
	width: 90%;
	height: 27em;
	background-color: rgba(185,93,42);
}
.left{
	margin-top: 100px;
	position: absolute;
	margin-left: 4em;
}
.input{
	padding: 5px;
	float: right;
	border-radius: 20px;
	border: none;
}
.btn{
	padding: 15px 30px;
	font-size: 20px;
	background-color: chocolate;
	border: solid white 2px;
	border-radius: 50px;
	position: absolute;
	margin-top: 50px;
}
</style>
<body>
	
	<form method="post">
		<div class="form">
		<div class="container">
			<div class="left">
				<center>
					<label>First Name</label>
			<input name="first_name" class="input" type="text"  required> <br><br>
			<label>Last Name</label>
			<input name="last_name" class="input" type="text"  required> <br><br>
			<label>Username</label>
			<input id="username" onkeyup="check_user()" name="username" class="input" type="text" required>
			<br><br>
				<label>Password</label>
			<input name="password" class="input" type="password" required>
			
					<button name="register" type="submit" class="btn" id="register">
						REGISTER
					</button>
<br><br><br>
</center>
				</div>
		</div>


	</div>
	</div><br><br>
</center>
</div>
		</div>
			
	</div>
	<img class="logo" src="logo.jpg">
	<center>
		<div id="checking"></div>
	</center>	
	<?php 
		if (isset($_POST['register'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
		

		$q = "INSERT INTO `site` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES ('', '".$first_name."', '".$last_name."', '".$username."', '".$password."')";
		$r = mysqli_query($con, $q);

		if ($r) {
				header("location:login.php");
		}
		else{
			echo $q;
		}
		}
	?>


</body>
</html>