<?php
 
	// Include confi.php
	include_once('conf.php');
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		$id_atlet = isset($_POST['id_atlet']) ? mysqli_real_escape_string($conn, $_POST['id_atlet']) : "";
		$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
		$password = isset($_POST['pass']) ? mysqli_real_escape_string($conn, $_POST['pass']) : "";
		$password_konfirm = isset($_POST['pass_konfirm']) ? mysqli_real_escape_string($conn, $_POST['pass_konfirm']) : "";
		$alamat = isset($_POST['alamat']) ? mysqli_real_escape_string($conn, $_POST['alamat']) : "";
		$kota_asal = isset($_POST['kota_asal']) ? mysqli_real_escape_string($conn, $_POST['kota_asal']) : "";
		$no_telefon = isset($_POST['no_telefon']) ? mysqli_real_escape_string($conn, $_POST['no_telefon']) : "";
		$cabang_olahraga = isset($_POST['cabang_olahraga']) ? mysqli_real_escape_string($conn, $_POST['cabang_olahraga']) : "";
		$id_psikolog = isset($_POST['id_psikolog']) ? mysqli_real_escape_string($conn, $_POST['id_psikolog']) : "";
		
		// Insert data into data base
		$sql = "SELECT * FROM atlet WHERE id_atlet = '".$id_atlet."' and password = '".$password_konfirm."'";
		$qur = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($qur,MYSQLI_ASSOC);
		$count = mysqli_num_rows($qur);

		if($count>0){
			$sql = "UPDATE `atlet` SET `id_psikolog`='".$id_psikolog."', `cabang_olahraga`='".$cabang_olahraga."', `alamat`='".$alamat."', `kota_asal`='".$kota_asal."', `no_telefon`='".$no_telefon."', `email`='".$email."', `password`='".$password."' WHERE id_atlet = '".$id_atlet."'";
			$qur = mysqli_query($conn, $sql);
			$row['id_psikolog'] = $id_psikolog;
			$row['cabang_olahraga'] = $cabang_olahraga;
			$row['alamat'] = $alamat;
			$row['kota_asal'] = $kota_asal;
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