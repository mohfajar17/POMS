<?php
 
    include_once('conf.php');

    date_default_timezone_set("Asia/Jakarta");

    $judul = $_POST['judul'];
    $dari     = $_POST['dari'];
    $untuk     = $_POST['untuk'];
    $waktu     = date("Y-m-d H:i:s");
    $isi     = $_POST['isi_info'];
    
    header('Content-Type: text/xml');
 
    $query = "INSERT INTO info (judul,dari,untuk,waktu,isi_info) values ('$judul','$dari','$untuk','$waktu','$isi')";
    $hasil = mysqli_query($conn,$query);
 
    if($hasil) {
        $json = array("status" => 1, "msg" => "Done User added!");

        // echoing JSON response
        echo json_encode($json);
    } else {
        // echo("Error description: " . mysqli_error($conn));
        $json = array("status" => 0, "msg" => "Error adding user!");
 
        // echoing JSON response
        echo json_encode($json);
    }
 
?>