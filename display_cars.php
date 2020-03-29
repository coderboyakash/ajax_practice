<?php include "dbcon.php" ;
    $query = "SELECT * FROM cars";
    $run = mysqli_query($conn, $query);
    if(!$run){
        die("Query Failed!! " . mysqli_error($conn));
    }
    while($row = mysqli_fetch_array($run)){
        echo "<tr>";
        echo "<td>" . $row['id']; "</td>";
        echo "<td>" . $row['title']; "</td>";
        echo "</tr>";
    }
?>