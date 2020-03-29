$(document).ready(function(){
    //update display cars

    setInterval(function(){
        updateCars();
    }, 1);

    function updateCars(){
        $.ajax({
            url : 'display_cars.php',
            type : 'POST',
            success : function(show_cars){
                if(!show_cars.error){
                    $("#show-cars").html(show_cars);
                }
            }
          });
    }
    //search cars
  $('#search').keyup(function(){
      var search = $('#search').val();
      $.ajax({
          url:'search.php',
          data:{search:search},
          type: 'POST',
          success:function(data){
              if(!data.error) {
                  $('#result').html(data);
              }
          }
  
      });
  });

  //add cars

  $("#add_car").submit(function(evt){
    evt.preventDefault();
    var postData = $(this).serialize();
    var url = $(this).attr('action');
    $.post(url, postData, function(php_table_data){
        $("#car-result").html(php_table_data);
        $("#add_car")[0].reset();
    });
  });
});