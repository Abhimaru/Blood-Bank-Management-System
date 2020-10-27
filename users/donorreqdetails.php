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
	<link rel="stylesheet" type="text/css" href="css/update_style.css?v=<?php echo time();?>">
</head>
<body>

<?php
    $Reqblood = "active";
    include "common/navbar.php" 
 ?>

<!-- PHP START -->
<?php
    include "../common/connection.php";
       
            if(isset($_GET['id'])){
                 $id = $_GET['id'];
            }
           
            $selectquery = "select * from donor where id = '$id'";

            $query = mysqli_query($con, $selectquery);
            $res = mysqli_fetch_array($query);

            if(isset($_POST['back'])){
                    header("location:requestblood.php");
            }

?>
<!-- PHP END -->
<section>
	<div class="container-fluid bg">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-6">
				<form method="post" class="form-container">
                <div class="card">
                    <div class="card-title text-center">
                        <h2>Donor Basic Info</h2>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-3">Name</label>
                            <div class="col-sm-3">
                                <input type="text" name="firstName" placeholder="First Name" class="form-control" value="<?php if(isset($res['Fname'])){echo $res['Fname'];} ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="middleName" placeholder="Middle Name" class="form-control" value="<?php  if(isset($res['Mname'])){echo $res['Mname'];} ?>" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php  if(isset($res['Lname'])){echo $res['Lname'];} ?>" required="true" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Gender</label>
                            <div class="col-sm-8">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php if(isset($res['Gender'])){echo $res['Gender']; }?>" required="true" readonly>                        
                            </div>                      
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php if(isset($res['Bloodgroup'])){echo $res['Bloodgroup'];}?>" required="true" readonly>  
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" value="<?php  if(isset($res['Bdate'])){echo $res['Bdate'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control" readonly><?php  if(isset($res['Address'])){echo $res['Address'];} ?></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" value="<?php  if(isset($res['City'])){echo $res['City'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Mobile Number-1 </label>
                            <div class="col-sm-8">
                                <input type="number" name="mobile" class="form-control" value="<?php  if(isset($res['Mobile1'])){echo $res['Mobile1'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Mobile Number-2</label>
                            <div class="col-sm-8">
                                <input type="number" name="phone" class="form-control" value="<?php  if(isset($res['Mobile2'])){echo $res['Mobile2'];} ?>" readonly>
                            </div>
                            </div>
                        </div>           
                    </div>
                    <div class="card-title text-center">
                        <h2>Donor Medical Info</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <input type="text" name="stats"  placeholder="ex. Normal" class="form-control" value="<?php  if(isset($res['Stats'])){echo $res['Stats'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp"  placeholder="Enter value in Celsius (°C)" class="form-control" value="<?php  if(isset($res['Temp'])){echo $res['Temp'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="300" name="pulse" placeholder="ex. 60–100" class="form-control" value="<?php  if(isset($res['Pulse'])){echo $res['Pulse'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" class="form-control" placeholder="ex. 80 | 120" value="<?php  if(isset($res['Bp'])){echo $res['Bp'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight"  placeholder="Enter Value in Kg" class="form-control" value="<?php  if(isset($res['Weight'])){echo $res['Weight'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin"  placeholder="Enter value in gm/dL (grams per deciliter)" class="form-control" value="<?php  if(isset($res['Hemoglobin'])){echo $res['Hemoglobin'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">HBsAg </label>
                            <div class="col-sm-8">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php if(isset($res['Hbsag'])){echo $res['Hbsag'];}?>" required="true" readonly> 
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Aids </label>
                            <div class="col-sm-8">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php if(isset($res['Aids'])){echo $res['Aids'];}?>" required="true" readonly> 
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Malaria Smear </label>
                            <div class="col-sm-8">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php if(isset($res['MalariaSmear'])){echo $res['MalariaSmear'];}?>" required="true" readonly> 
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Hematocrit </label>
                            <div class="col-sm-8">
                                <input type="text" name="hematocrit"  placeholder="Enter Value in percentage(%)" class="form-control" value="<?php  if(isset($res['Hematocrit'])){echo $res['Hematocrit'];} ?>" readonly>
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success btn-block" type="submit" name="back" >GO BACK</button>
                            </div>
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