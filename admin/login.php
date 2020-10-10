<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/login_style.css?v=<?php echo time();?>">
</head>
<body>
<section>
	<div class="container-fluid bg">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-3">
				<form class="form-container" method="post">
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" class="form-control" id="Username" placeholder="Enter Username" name="username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password"
						name="password">
					</div>

					<button type="submit" class="btn btn-danger btn-block" name="login">Login</button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include "../common/footer.php"?>

<p style="position: absolute; color: white; margin: -150px 0px 0px 530px;" class="text-center">
		<!-- PHP PART START-->
		<?php
			include "../common/connection.php";
			if(isset($_POST['login'])){

				$usrnm = $_POST['username'];
				$pass = $_POST['password'];
				if($usrnm == "admin"){
					if($pass == "123"){
						$_SESSION['Username'] = "admin";
						header("location:index.php");
					}
					else{
						echo "*Password Inccorect*";
					}
				}
				else{
					echo "*Invalid Username*";
				}
			}
		?>
		<!-- PHP PART END -->
</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>