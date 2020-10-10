
		<?php 

			include "../common/connection.php";
			$id = $_GET['id'];

			$selectquery = "select Username from users where id = '$id'";
			$squery = mysqli_query($con, $selectquery);
			$res = mysqli_fetch_array($squery);
			$usrnm = $res['Username'];

			$delquery = "delete from users where id = '$id'";
			$dquery = mysqli_query($con, $delquery);
			if($dquery){
				$delquery2 = "delete from donor where Username = '$usrnm'";
				$dquery2 = mysqli_query($con, $delquery2);
				if($dquery2){
					header("location:removeuser.php");
				}
			}
		?>
