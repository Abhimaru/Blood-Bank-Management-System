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
    $Changeinfo = "active";
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

            if(isset($_POST['update'])){
                $fname = $_POST['firstName'];
                $mname = $_POST['middleName'];
                $lname = $_POST['lastName'];
                $sex = $_POST['sex'];
                $bType = $_POST['b_type'];
                $dob = $_POST['dob'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $mobile = $_POST['mobile'];
                $phone = $_POST['phone'];
                //Medical Information
                $donationDate = $_POST['don_date'];
                $stats = $_POST['stats'];
                $temp = $_POST['temp'];
                $pulse = $_POST['pulse'];
                $bp = $_POST['bp'];
                $weight = $_POST['weight'];
                $hemoglobin = $_POST['hemoglobin'];
                $hbsag = $_POST['hbsag'];
                $aids = $_POST['aids'];
                $malariaSmear = $_POST['malariaSmear'];
                $hematocrit = $_POST['hematocrit'];

                $updatequery = "update donor set Fname='$fname', Mname='$mname', Lname='$lname', Gender='$sex', Bloodgroup='$bType', Bdate='$dob', Address='$address', City='$city', Dondate='$donationDate', Stats='$stats', Temp='$temp', Pulse='$pulse', Bp='$bp', Weight='$weight', Hemoglobin='$hemoglobin', Hbsag='$hbsag', Aids='$aids', MalariaSmear='$malariaSmear', Hematocrit='$hematocrit', Mobile1='$mobile', Mobile2='$phone' where id = '$id'";
                $query = mysqli_query($con, $updatequery);
                if ($query) {
                    header("location:updateinfo.php");
                }
                else{
                    ?>
                        <script>
                            alert("DATA NOT UPDATED");
                        </script>
                    <?php
                }
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
                                <input type="text" name="firstName" placeholder="First Name" class="form-control" value="<?php if(isset($res['Fname'])){echo $res['Fname'];} ?>" required="true">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="middleName" placeholder="Middle Name" class="form-control" value="<?php  if(isset($res['Mname'])){echo $res['Mname'];} ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" value="<?php  if(isset($res['Lname'])){echo $res['Lname'];} ?>" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Gender</label>
                            <div class="col-sm-4">
                            <input type="radio" value="male" name="sex" <?php if($res['Gender']== "male"){echo "checked";}?>>Male                         
                            </div>
                            <div class="col-sm-4">
                            <input type="radio" value="female" name="sex" <?php if($res['Gender']== "female"){echo "checked";}?>>Female   
                            </div>                       
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="b_type" class="form-control" >
                                    <option value="<?php if(isset($res['Bloodgroup'])){echo $res['Bloodgroup'];}?>">Your Bloodgroup: <?php if(isset($res['Bloodgroup'])){echo $res['Bloodgroup'];}?></option>
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
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" value="<?php  if(isset($res['Bdate'])){echo $res['Bdate'];} ?>" >
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control"><?php  if(isset($res['Address'])){echo $res['Address'];} ?></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" value="<?php  if(isset($res['City'])){echo $res['City'];} ?>" >
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Mobile Number-1 </label>
                            <div class="col-sm-8">
                                <input type="number" name="mobile" class="form-control" value="<?php  if(isset($res['Mobile1'])){echo $res['Mobile1'];} ?>" >
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Mobile Number-2</label>
                            <div class="col-sm-8">
                                <input type="number" name="phone" class="form-control" value="<?php  if(isset($res['Mobile2'])){echo $res['Mobile2'];} ?>">
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
                            <label class="col-sm-4">Date of Donation</label>
                            <div class="col-sm-8">
                                <input type="date" name="don_date"  class="form-control" value="<?php  if(isset($res['Dondate'])){echo $res['Dondate'];} ?>">
                            </div>
                            </div>  
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <input type="text" name="stats"  placeholder="ex. Normal" class="form-control" value="<?php  if(isset($res['Stats'])){echo $res['Stats'];} ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp"  placeholder="Enter value in Celsius (°C)" class="form-control" value="<?php  if(isset($res['Temp'])){echo $res['Temp'];} ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="300" name="pulse" placeholder="ex. 60–100" class="form-control" value="<?php  if(isset($res['Pulse'])){echo $res['Pulse'];} ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" class="form-control" placeholder="ex. 80 | 120" value="<?php  if(isset($res['Bp'])){echo $res['Bp'];} ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight"  placeholder="Enter Value in Kg" class="form-control" value="<?php  if(isset($res['Weight'])){echo $res['Weight'];} ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin"  placeholder="Enter value in gm/dL (grams per deciliter)" class="form-control" value="<?php  if(isset($res['Hemoglobin'])){echo $res['Hemoglobin'];} ?>">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">HBsAg </label>
                            <div class="col-sm-8">
                                <select name="hbsag" class="form-control">
                                    <option value="<?php if(isset($res['Hbsag'])){echo $res['Hbsag'];}?>">HBsAg :<?php if(isset($res['Hbsag'])){echo $res['Hbsag'];}?></option>
                                    <option value="NEGATIVE">NEGATIVE</option>
                                    <option value="POSITIVE">POSITIVE</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Aids </label>
                            <div class="col-sm-8">
                                <select name="aids" class="form-control">
                                    <option value="<?php if(isset($res['Aids'])){echo $res['Aids'];}?>">Aids :<?php if(isset($res['Aids'])){echo $res['Aids'];}?></option>
                                    <option value="NEGATIVE">NEGATIVE</option>
                                    <option value="POSITIVE">POSITIVE</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Malaria Smear </label>
                            <div class="col-sm-8">
                                  <select name="malariaSmear" class="form-control">
                                    <option value="<?php if(isset($res['MalariaSmear'])){echo $res['MalariaSmear'];}?>">Malaria Smear :<?php if(isset($res['MalariaSmear'])){echo $res['MalariaSmear'];}?></option>
                                    <option value="NEGATIVE">NEGATIVE</option>
                                    <option value="POSITIVE">POSITIVE</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Hematocrit </label>
                            <div class="col-sm-8">
                                <input type="text" name="hematocrit"  placeholder="Enter Value in percentage(%)" class="form-control" value="<?php  if(isset($res['Hematocrit'])){echo $res['Hematocrit'];} ?>">
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success btn-block" type="submit" name="update" >UPDATE</button>
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