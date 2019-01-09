<?php
include_once 'funciones/logic.php';
$funcion = new funciones();
$minimum_range = 100;
$maximum_range = 450;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
  #loading
  {
    text-align:center;
    background: url('loader.gif') no-repeat center;
    height: 150px;
  }
</style>
</head>
<body>

  <div class="container">
    <div class="row">
      <br />
      <h2 align="center">Advance Ajax Product Filters in PHP</h2>
      <br />
      <div class="col-md-8">
        <div class="list-group">
          <h3>Price</h3>
          <input type="hidden" id="hidden_minimum_price" value="0" />
          <input type="hidden" id="hidden_maximum_price" value="65000" />
          <p id="price_show">1000 - 65000</p>
          <div id="price_range"></div>
        </div>
        <div class="list-group">
          <h3>Brand</h3>
          <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
            <?php echo $funcion->brand();?>
          </div>
        </div>

        <div class="list-group">
          <h3>RAM</h3>
          <?php echo $funcion->ram();?>
        </div>

        <div class="list-group">
          <h3>Internal Storage</h3>
          <?php echo $funcion->internal();?>
        </div>
      </div>

      <div class="col-md-9">
        <br />
        <div class="row filter_data">
          <?php echo $funcion->products() ?>
        </div>
      </div>
    </div>

  </div>

</body>
<script src="js/jquery.js" charset="utf-8"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
<script src="js/jquery-ui.js" charset="utf-8"></script>
<script>
$(document).ready(function(){
    filter_data();
    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'logic';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"logic.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
</html>
