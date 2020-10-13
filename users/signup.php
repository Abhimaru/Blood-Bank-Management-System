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

<!-- PHP START -->

	<?php
		include "../common/connection.php";
		$AlertPassword = false;
		$AlertUsername = false;
		if(isset($_POST['join'])){
			$usrnm = mysqli_real_escape_string($con, $_POST['username']);
			$pass = mysqli_real_escape_string($con, $_POST['password']);
			$cpass = mysqli_real_escape_string($con, $_POST['cpassword']);

			$h_pass = password_hash($pass, PASSWORD_BCRYPT);

			$usernamequery = "select * from users where Username='$usrnm'";
			$uquery = mysqli_query($con, $usernamequery);
			$usercount = mysqli_num_rows($uquery);

			if($usercount>0){
				$AlertUsername = true;
			}
			else{
				if($pass === $cpass){

							$insertquery = "insert into users(Username, Password) values('$usrnm','$h_pass')";
							$iquery = mysqli_query($con, $insertquery);
							header("location:login.php");
				}
				else{
					$AlertPassword = true;
				}
			}
		}
	?>
<!-- PHP END -->
<section>
	<div class="container-fluid bg">
		<?php
			if($AlertUsername){
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Username is already taken Please use different username
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php
			}
		?>

		<?php
			if($AlertPassword){
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Passwords are not match
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?php
			}
		?>
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


<?php include "../common/footer.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>