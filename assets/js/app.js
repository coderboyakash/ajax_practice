$(document).ready(function(){
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
  });