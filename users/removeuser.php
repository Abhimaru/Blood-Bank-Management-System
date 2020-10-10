<?php
	session_start();
	include "../common/connection.php";
	if(isset($_POST['deleteu'])){

		$usrnm = $_SESSION['Username'];

		$deletequery = "delete from users where Username = '$usrnm'";
		$dquery = mysqli_query($con, $deletequery);
		if($dquery){
			$deletequery2 = "delete from donor where Username = '$usrnm'";
			$dquery2 = mysqli_query($con, $deletequery2);
			if($dquery2){
				header("location:logout.php");
			}
		}
	}
?>