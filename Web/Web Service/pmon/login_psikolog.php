<?php
 
	// Include confi.php
	include 'conf.php';
	 
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
		$password = isset($_POST['pass']) ? mysqli_real_escape_string($conn, $_POST['pass']) : "";
		$token = isset($_POST['token']) ? mysqli_real_escape_string($conn, $_POST['token']) : "";
		$status = 0;

		// Insert data into data base
		$sql = "SELECT * FROM psikolog WHERE email = '".$email."' and password = '".$password."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);
		
		if($count>0){
			$sql = "UPDATE `psikolog` SET `token` = '".$token."' WHERE `email` = '".$email."'";
			$qur = mysqli_query($conn, $sql);
			$row['token'] = $token;

			$sqlGetAtlet = "SELECT * FROM atlet WHERE id_psikolog = '".$row['id_psikolog']."' and status_verifikasi = '".$status."'";
			$qurGetAtlet = mysqli_query($conn, $sqlGetAtlet);
			$rowsAtlet = array();

			if(mysqli_num_rows($qurGetAtlet) > 0){
				while($r = mysqli_fetch_assoc($qurGetAtlet)) {
			    	$rowsAtlet[] = $r;
				}
			}
			$row['atlet'] = $rowsAtlet;
		 	$json = array("status" => 1, "msg" => "Login success!", "data" => $row);
		}else{
		 	$json = array("status" => 0, "msg" => "Incorrect parameter!", "data" => array());
		}
	}else{
	 	$json = array("status" => 0, "msg" => "Request method not accepted", "data" => array());
	}
	
	//@mysql_close($conn);
	
	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
?>