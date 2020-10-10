<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/signup_style.css?v=<?php echo time();?>">
</head>
<body>
<section>
	<div class="container-fluid bg">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-3">
				<form class="form-container" method="post">
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" class="form-control" maxlength="15" id="Username" placeholder="Enter Username" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password"
						name="password">
					</div>
					<div class="form-group">
						<label for="passwordc">Password</label>
						<input type="password" class="form-control" id="passwordc" placeholder="Confirm Password" name="cpassword">
					</div>
					<button type="submit" class="btn btn-danger btn-block" name="join">JOIN</button>

					<div>
						<p class="mt-3">Already a member? <a href="login.php">Login</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>



<p style="position: absolute; color: white; margin: -60px 0px 0px 530px;" class="text-center">
<!-- PHP START -->

	<?php
		include "../common/connection.php";
		if(isset($_POST['join'])){
			$usrnm = mysqli_real_escape_string($con, $_POST['username']);
			$pass = mysqli_real_escape_string($con, $_POST['password']);
			$cpass = mysqli_real_escape_string($con, $_POST['cpassword']);

			$h_pass = password_hash($pass, PASSWORD_BCRYPT);

			$usernamequery = "select * from users where Username='$usrnm'";
			$uquery = mysqli_query($con, $usernamequery);
			$usercount = mysqli_num_rows($uquery);

			if($usercount>0){
				echo "*Username is already taken Please use different username*";
			}
			else{
				if($pass === $cpass){

							$insertquery = "insert into users(Username, Password) values('$usrnm','$h_pass')";
							$iquery = mysqli_query($con, $insertquery);
							header("location:login.php");
				}
				else{
					echo "Passwords are not match";
				}
			}
		}
	?>
<!-- PHP END -->
</p>
<?php include "../common/footer.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>