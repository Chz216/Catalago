$(document).ready(function() {

  navbar();
  products();

  function navbar() {
    $.ajax({
      url: "funciones/controller.php",
      method: 'POST',
      data: {navbar:1},
      success: function(data){
        $('#navbar-content').html(data);
      }
    });
  }

  function products() {
    $.ajax({
      url: "funciones/controller.php",
      method: 'POST',
      data: {products:1},
      success: function(data){
        $('#get_products').html(data);
      }
    });
  }

  $("body").delegate(".nv-link","click",function(event) {
      event.preventDefault();
    var cid = $(this).attr('href');
      $.ajax({
        url: cid,
        method: 'POST',
        data: {get_selected_navbar:1,navbar_id:cid},
        success: function(data){
          $('#get_pro').html(data);
        }
      });
    });
});
