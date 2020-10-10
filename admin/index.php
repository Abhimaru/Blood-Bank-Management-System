<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="css/index_style.css?v=<?php echo time();?>">
</head>
<body>

<?php 
	$Homepage = "active";
	include "common/navbar.php"
?>

<section style="background-color: yellow;">
	<div class="container-fluid row text-center">

		<div class="col-lg-8 col-md-8 col-sm-12 sec1">
			<p>"Blood is a life, pass it on!"</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 sec1">
			<img src="../images/blood2.png" class="img-fluid">
		</div>
		
	</div>
</section>

<?php include "../common/footer.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>