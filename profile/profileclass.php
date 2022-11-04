<?php
	include('../connect.php');
	session_start();
	switch ($_POST['form']) {
		case 'fillProfileFieldInfo':

			$sql = "SELECT * FROM tbl_user WHERE userID = '".$_SESSION['cl_user_id']."'";
			$result = mysqli_query($connection, $sql);
			while ($row = mysqli_fetch_array($result)) {

				echo json_encode($row);

			}
			// echo $sql . " - sql";
		break;
	}

?>