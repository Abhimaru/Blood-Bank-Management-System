<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor list</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/donorlist_style.css?v=<?php echo time();?>">
</head>
<body>

<?php 
	$Reqblood = "active";
	include "common/navbar.php" 
?>

<section>
	<div class="container-fluid bg">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-6">
				<form method="post" class="form-container">
					<div class="card">
                    <div class="card-title text-center">
                        <h2>SEARCH BY BLOODGROUP</h2>
                    </div>
                    <div class="card-body">
					<div class="form-group">
                        <div class="row">
                        <label class="col-sm-4">Blood Type:</label>
                        <div class="col-sm-5">
                            <select name="b_type" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>

                        <div class="col-sm-3">
                                <button class="btn btn-success" type="submit" name="search" >SEARCH</button>
                            </div>
                        </div>
                    </div>
                </div>
				</form>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="main-div">
			<h1>LIST OF DONORS</h1>
				<div class="table-responsive table-striped">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Gender</th>
								<th>Bloodgroup</th>
								<th>Birth Date</th>
								<th>Address</th>
								<th>City</th>
								<th>Mobile 1</th>
								<th>Mobile 2</th>
							</tr>
						</thead>

						<tbody>
							<?php 
								include "../common/connection.php";

								if(isset($_POST['search'])){
									$bloodtype = $_POST['b_type'];

									$selectquery = "select Fname, Mname, Lname, Gender, Bloodgroup, Bdate, Address, City, Mobile1, Mobile2 from donor where Bloodgroup = '$bloodtype'";

									$query = mysqli_query($con, $selectquery);


									while($res = mysqli_fetch_array($query)){
							?>
										<tr>
					      <td class="text-left"><?php echo $res['Fname']." "; 
												      echo $res['Mname']." ";
												      echo $res['Lname']; ?></td>
											<td><?php echo $res['Gender'] ?></td>
											<td><?php echo $res['Bloodgroup'] ?></td>
											<td><?php echo $res['Bdate'] ?></td>
											<td><?php echo $res['City'] ?></td>
						  <td class="text-left"><?php echo $res['Address'] ?></td>
											<td><?php echo $res['Mobile1'] ?></td>
											<td><?php echo $res['Mobile2'] ?></td>
										</tr>
								<?php	
									}

								}
								else{
									$selectquery = "select Fname, Mname, Lname, Gender, Bloodgroup, Bdate, Address, City, Mobile1, Mobile2 from donor";

										$query = mysqli_query($con, $selectquery);


										while($res = mysqli_fetch_array($query)){
								?>
											<tr>
						      <td class="text-left"><?php echo $res['Fname']." "; 
													      echo $res['Mname']." ";
													      echo $res['Lname']; ?></td>
												<td><?php echo $res['Gender'] ?></td>
												<td><?php echo $res['Bloodgroup'] ?></td>
												<td><?php echo $res['Bdate'] ?></td>
												<td><?php echo $res['City'] ?></td>
							  <td class="text-left"><?php echo $res['Address'] ?></td>
												<td><?php echo $res['Mobile1'] ?></td>
												<td><?php echo $res['Mobile2'] ?></td>
											</tr>
									<?php	
										}
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