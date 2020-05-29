<?php
 
	// Include confi.php
	include_once('conf.php');
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
		$password = isset($_POST['pass']) ? mysqli_real_escape_string($conn, $_POST['pass']) : "";
		$password_konfirm = isset($_POST['pass_konfirm']) ? mysqli_real_escape_string($conn, $_POST['pass_konfirm']) : "";
		$alamat = isset($_POST['alamat']) ? mysqli_real_escape_string($conn, $_POST['alamat']) : "";
		$no_telefon = isset($_POST['no_telefon']) ? mysqli_real_escape_string($conn, $_POST['no_telefon']) : "";
		
		// Insert data into data base
		$sql = "SELECT * FROM psikolog WHERE id_psikolog = '".$id_psikolog."' and password = '".$password_konfirm."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);

		if($count>0){
			$sql = "UPDATE `psikolog` SET `alamat`='".$alamat."', `no_telefon`='".$no_telefon."', `email`='".$email."', `password`='".$password."' WHERE id_psikolog = '".$id_psikolog."'";
			$qur = mysqli_query($conn, $sql);
			$row['alamat'] = $alamat;
			$row['no_telefon'] = $no_telefon;
			$row['email'] = $email;
			$row['password'] = $password;
		 	$json = array("status" => 1, "msg" => "Update success!", "data" => array());
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