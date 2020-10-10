<?php 
	session_start();
	include "../common/connection.php";

	$usrnmsession = $_SESSION['Username'];
	if(isset($_POST['changeu'])){
		$usrnm = mysqli_real_escape_string($con, $_POST['username']);

		$users = "select * from users where Username='$usrnm'";
		$query = mysqli_query($con, $users);
		$usercount = mysqli_num_rows($query);
		if($usercount>0){
			header("location:changeuserinfo.php");
		}
		else{

			$updatequery = "update users set Username = '$usrnm' where Username = '$usrnmsession'";
			$uquery = mysqli_query($con, $updatequery);

			if($uquery){
				$updatequery2 = "update donor set Username = '$usrnm' where Username = '$usrnmsession'";
				$uquery2 = mysqli_query($con, $updatequery2);
				if($uquery2){
					$_SESSION['Username'] = $usrnm ;
					header("location:index.php");
				}
			}
			else{
			?>
				<script>
					alert("NOT UPDATED");
				</script>
			<?php
			}
		}
	}

?>