  navbar();
  footer();

  function navbar() {
    $.ajax({
      url: "functions_php/controller.php",
      method: 'POST',
      data: {navbar:1},
      success: function(data){
        $('#navbar_content').html(data);
      }
    });
  }

  function footer() {
    $.ajax({
      url: "functions_php/controller.php",
      method: 'POST',
      data: {footer:1},
      success: function(data){
        $('#footer_content').html(data);
      }
    });
  }
