<?php
	session_start();
	include "../common/connection.php";
	if(isset($_POST['changep'])){

		$newpass = $_POST['newpass'];
		$cnewpass  = $_POST['cnewpass'];
		$usrnm = $_SESSION['Username'];

		$h_newpass = password_hash($newpass, PASSWORD_BCRYPT);
		$h_cnewpass = password_hash($cnewpass, PASSWORD_BCRYPT);

		if($newpass === $cnewpass){
			$updatepassquery = "update users set Password = '$h_newpass' where Username = '$usrnm'";
			$upquery = mysqli_query($con, $updatepassquery);
			if($upquery){
				header("location:login.php");
			}
		}
		else{
			echo "Passwords are not match";
		}
	}
?>