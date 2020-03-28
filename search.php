<?php include "dbcon.php" ;

    $search = $_POST['search'];
    echo $search;
    if(!empty($search)){
        $query = "SELECT * FROM cars WHERE title LIKE '$search%'";
        $run = mysqli_query($conn, $query);
        if(!$run){
            die('Query Failed');
        }
        while($row = mysqli_fetch_array($run)){
            $brand = $row['title'];
            ?>
            <ul>
                <li class="list-unstyled d-6"><p><?php echo $brand . " in stock"; ?></p></li>
            </ul>
            <?php
        }
    }

?>