$(document).ready(function() {

  products();

  function products() {
    $.ajax({
      url: "functions_php/funciones.php",
      method: 'POST',
      data: {products:1},
      success: function(data){
        $('#products').html(data);
      }
    });
  }


});
