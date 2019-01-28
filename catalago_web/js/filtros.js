$(document).ready(function() {

  function products() {
    $.ajax({
      url: 'funciones/logica.php',
      type: 'POST',
      data: {producto:1},
      success: function(data) {
        $('#get_products').html(data);
      }
    });
  }

});
