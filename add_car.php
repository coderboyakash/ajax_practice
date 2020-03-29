<?php
    include "dbcon.php" ;

    if(isset($_POST['car_name'])){
        $car_name = $_POST['car_name'];
        $query = "INSERT INTO cars (title) VALUES ('$car_name')";
        $run = mysqli_query($conn, $query);
        if(!$run){
            die('Query Failed');
        }
    }
?>