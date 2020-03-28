<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "ajax";
    $conn = mysqli_connect($host, $user, $pass, $dbnm);
    if($conn){
        // echo "Connection Established";
    }else{
        echo mysqli_error($conn);
    }

?>