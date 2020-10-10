<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete info</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/delete_style.css?v=<?php echo time();?>">
</head>
<body>

<?php 
	$Deleteinfo = "active";
	include "common/navbar.php";
?>

<section class="form1">
	<div class="container-fluid bg">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-6 col-md-8">
				<form class="form-container" method="post">
					<div class="text-center">
						<h1>*****CLICK THE DELETE BUTTON*****</h1>
					</div>
					
					<button type="submit" class="btn btn-danger btn-block" name="delete">DELETE</button>
				</form>
			</div>
		</div>
	</div>
</section>



<p style="position: absolute; color: white; margin: -60px 0px 0px 530px;" class="text-center">
<!-- PHP START -->

	<?php
		include "../common/connection.php";
	
		if(isset($_POST['delete'])){

			$username = $_SESSION['Username'];

			$deletequery = "delete from donor where Username='$username'";
			$query = mysqli_query($con, $deletequery);
			if($query){
				header("location:index.php");
			}
			else{
				?>
                    <script>
                        alert("ERROR");
                    </script>
                <?php
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