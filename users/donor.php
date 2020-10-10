<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Become donor</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/donor_style.css?v=<?php echo time();?>">
</head>
<body>

<?php 
    $Becomedonor = "active";
    include "common/navbar.php" 
?>
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
                                <input type="text" name="firstName" placeholder="First Name" class="form-control" required="true"><br>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="middleName" placeholder="Middle Name" class="form-control"><br>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" required="true"><br>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Gender</label>
                            <div class="col-sm-4">
                            <input type="radio" value="male" name="sex" checked="true">Male                         
                            </div>
                            <div class="col-sm-4">
                            <input type="radio" value="female" name="sex">Female   
                            </div>                       
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
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
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control" required="true"></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Mobile Number-1 </label>
                            <div class="col-sm-8">
                                <input type="number" name="mobile" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Mobile Number-2</label>
                            <div class="col-sm-8">
                                <input type="number" name="phone" class="form-control" required="true">
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
                                <input type="date" name="don_date"  class="form-control" required="true">
                            </div>
                            </div>  
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <input type="text" name="stats"  placeholder="ex. Normal" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp"  placeholder="Enter value in Celsius (°C)" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="300" name="pulse" placeholder="ex. 60–100" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" class="form-control" placeholder="ex. 80 | 120" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight"  placeholder="Enter Value in Kg" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin"  placeholder="Enter value in gm/dL (grams per deciliter)" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <label class="col-sm-4">HBsAg </label>
                            <div class="col-sm-8">
                                <select name="hbsag" class="form-control">
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
                                <input type="text" name="hematocrit"  placeholder="Enter Value in percentage(%)" class="form-control" required="true">
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success btn-block" type="submit" name="submit" >SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
			</div>
		</div>
	</div>
</section>


<!-- PHP START -->
<?php
    include "../common/connection.php";
    if(isset($_POST['submit'])){
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

        $usrnm = $_SESSION['Username'];

        $selectquery = "select * from donor where Username='$usrnm'";
        $squery = mysqli_query($con, $selectquery);
        $usercount = mysqli_num_rows($squery);

        if($usercount>0){
            ?>
                <script>
                    alert("YOU CAN'T INSERT AGAIN");
                </script>
            <?php
        }
        else{
         $insertquery = "insert into donor(Username, Fname, Mname, Lname, Gender, Bloodgroup, Bdate, Address, City, Dondate, Stats, Temp, Pulse, Bp, Weight, Hemoglobin, Hbsag, Aids, MalariaSmear, Hematocrit, Mobile1, Mobile2) values('$usrnm','$fname', '$mname', '$lname', '$sex', '$bType', '$dob', '$address', '$city', '$donationDate', '$stats', '$temp', '$pulse', '$bp', '$weight','$hemoglobin', '$hbsag', '$aids', '$malariaSmear', '$hematocrit', '$mobile', '$phone')";
         $query = mysqli_query($con, $insertquery);
        }
}
?>
<!-- PHP END -->
<?php include "../common/footer.php"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>