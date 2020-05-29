<?php
 
	// Include confi.php
	include_once('conf.php');
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$id_atlet = isset($_POST['id_atlet']) ? mysqli_real_escape_string($conn, $_POST['id_atlet']) : "";
		
		// Insert data into data base
		$sql = "SELECT * FROM atlet WHERE id_atlet = '".$id_atlet."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);

		if($count>0){
		 	$json = array("status" => 1, "msg" => "Incorrect parameter!", "data" => array());
		}else{
		 	$json = array("status" => 0, "msg" => "success!", "data" => array());
		}
	}else{
	 	$json = array("status" => 0, "msg" => "Request method not accepted", "data" => array());
	}
	
	//@mysql_close($conn);
	
	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);
?>