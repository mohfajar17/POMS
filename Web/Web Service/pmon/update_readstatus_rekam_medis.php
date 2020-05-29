<?php
 
    include_once('conf.php');

    $id_rekam_medis     = $_POST['id_rekam_medis'];
    $status     = 0;

    header('Content-Type: text/xml');
 
    $query = "UPDATE `rekam_medis` SET `status_read` = '".$status."' WHERE `id_rekam_medis` = '".$id_rekam_medis."'";
    $hasil = mysqli_query($conn,$query);
 
    if($hasil) {
        $json = array("status" => 1, "msg" => "Done User added!");

        // echoing JSON response
        echo json_encode($json);
    } else {
        $json = array("status" => 0, "msg" => "Error adding user!");
 
        // echoing JSON response
        echo json_encode($json);
    }
 
?>