<?php
 
    include_once('conf.php');

    $token = $_POST['token'];
    
    header('Content-Type: text/xml');
 
    $query = "DELETE FROM atlet WHERE token = '".$token."'";
    $hasil = mysqli_query($conn,$query);
 
    if($hasil) {
        $json = array("status" => 1, "msg" => "Done logout!");

        // echoing JSON response
        echo json_encode($json);
    } else {
        $json = array("status" => 0, "msg" => "Error logout!");
 
        // echoing JSON response
        echo json_encode($json);
    }
?>