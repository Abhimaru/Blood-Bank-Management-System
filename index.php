<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/index_style.css?v=<?php echo time();?>">
</head>
<body>


<section>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark header">
  <a class="navbar-brand" href="#">Blood Bank Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="users/login.php">Login<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="users/signup.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
    </ul>
  </div>
</nav>
</header>
</section>


<section style="background-color: yellow;">
	<div class="container-fluid row text-center">

		<div class="col-lg-4 col-md-4 col-sm-12 sec1">
			<img src="images/blood.png" class="img-fluid">
		</div>

		<div class="col-lg-8 col-md-8 col-sm-12 sec1">
			<p>"Blood Donation will cost you nothing, but it will save a life!"</p>
		</div>
		
	</div>
</section>

<?php include "common/footer.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>