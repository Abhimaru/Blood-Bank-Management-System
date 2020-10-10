	<?php
			include "../common/connection.php";
		

				if (isset($_GET['id'])) {

					$id = $_GET['id'];
				}
				$deletequery = "delete from donor where id = '$id'";
				$query = mysqli_query($con, $deletequery);

				if($query){
					header("location:deleteinfo.php");
				}

	?>