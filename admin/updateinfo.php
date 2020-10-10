<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update info</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/updateinfo_style.css?v=<?php echo time();?>">
</head>
<body>

<?php 
	$Changeinfo = "active";
	include "common/navbar.php" 
?>

<div class="card-title text-center">
    <h2>SEARCH BY BLOODGROUP</h2>
</div>

<section>

	<h1>LIST OF DONORS</h1>
	<div class="main-div">
				<div class="table-responsive table-striped">
					<table>
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Bloodgroup</th>
								<th>Birth Date</th>
								<th>City</th>
								<th>Address</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								include "../common/connection.php";


									$selectquery = "select * from donor";

									$query = mysqli_query($con, $selectquery);


									while($res = mysqli_fetch_array($query)){
							?>
										<tr>
											<td><?php echo $res['id'] ?></td>
					      <td class="text-left"><?php echo $res['Fname']." "; 
												      echo $res['Mname']." ";
												      echo $res['Lname']; ?></td>
											<td><?php echo $res['Gender'] ?></td>
											<td><?php echo $res['Bloodgroup'] ?></td>
											<td><?php echo $res['Bdate'] ?></td>
											<td><?php echo $res['City'] ?></td>
						  <td class="text-left"><?php echo $res['Address'] ?></td>
											<td><a href="update.php?id=<?php echo $res['id'] ?>">UPDATE</a></td>

										</tr>
								<?php	
									}

							
							 ?>
						</tbody>
					</table>
				</div>
		</div>
</section>

<?php include "../common/footer.php"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>