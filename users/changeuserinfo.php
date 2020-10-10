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
	<link rel="stylesheet" type="text/css" href="css/changeuserinfo_style.css?v=<?php echo time();?>">
</head>
<body>

<?php include "common/navbar.php";?>
<section>
	<div class="container-fluid bg">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-6">
				<form class="form-container" action="changeusername.php" method="post">
					<div class="form-group">
						<h4 class="text-center u">CHANGE USERNAME</h4>
						<div class="row">
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Username" placeholder="Enter New Username" name="username"><br>
							</div>	

							<div class="col-sm-4">
								<button type="submit" class="btn btn-danger btn-block" name="changeu">Change</button>
							</div>
						</div>
					</div>
				</form>

				<form class="form-container2" action="changepassword.php" method="post">
					<div class="form-group">
						<h4 class="text-center u">CHANGE PASSWORD</h4>
						<div class="row">

							<div class="col-sm-12">
								<input type="password" class="form-control" id="Username" placeholder="Enter New password" name="newpass"><br>
							</div>	

							<div class="col-sm-12">
								<input type="password" class="form-control" id="Username" placeholder="Confirm New password" name="cnewpass"><br>
							</div>	

							<div class="col-sm-12">
								<button type="submit" class="btn btn-danger btn-block" name="changep">Change</button>
							</div>
						</div>
					</div>
				</form>

				<form class="form-container3" action="removeuser.php" method="post">
					<div class="form-group">
						<h4 class="text-center u">DELET YOUR ACCOUNT</h4>
						<p class="text-center"><strong>NOTE: </strong>If you delete your account then your information will also be deleted.</p>
						<div class="row">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-danger btn-block" name="deleteu">DELETE ACCOUNT</button>
							</div>
						</div>
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