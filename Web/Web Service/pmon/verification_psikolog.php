<?php
 
	// Include confi.php
	include_once('conf.php');
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		$password = isset($_POST['pass']) ? mysqli_real_escape_string($conn, $_POST['pass']) : "";
		$verification = 1;
		
		// Insert data into data base
		$sql = "SELECT * FROM psikolog WHERE id_psikolog = '".$id_psikolog."' and password = '".$password."' and status_verifikasi = '".$verification."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);

		if($count>0){
		 	$json = array("status" => 1, "msg" => "Login success!", "data" => array());
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