<?php
 
    include_once('conf.php');

    $id_form     = $_POST['id_form'];
    $status     = 0;

    header('Content-Type: text/xml');
 
    $query = "UPDATE `form` SET `status` = '".$status."' WHERE `id_form` = '".$id_form."'";
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