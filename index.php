<?php include "header.php" ?>


<div class="container" class="col-xs-6 col-xs-offset-3">
    <div class="row">
        <h2 class="mt-5" >Search Our Database</h2>
            <input class='form-control' type="text" name='search' id='search' placeholder='Search our inventory'>
            <br>
            <h2 id="result"></h2>
    </div>
    <br>
    <div class="row">
        <form method="post" id="add_car" action="add_car.php">
            <div class="form-group">
                <input type="text" name="car_name" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="add" class="btn btn-primary" value="Add">
            </div>
        </form>
    </div>
    <div class="col-xs-6">
        <div id="car-result">

        </div>
    </div>
</div>


<?php include "footer.php" ?>
