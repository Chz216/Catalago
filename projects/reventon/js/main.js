$(".photos").click(function(e) {
  var enlace = e.target.src;
  var data = $(this).attr("data");
  var ligthbox = '<div class="ligthbox">' +
    '<img src="'+enlace+'" alt="" id="zoom_mw" data-zoom-image="'+data+'">'+
    '<div class="btn-close">X</div>'+
  '</div>';
  $("body").append(ligthbox)
  $("#zoom_mw").elevateZoom({
    scrollZoom : false,
    cursor : "crosshair",
    zoomWindowOffetx : 15
  });
  $(".btn-close").click(function() {
    $(".ligthbox").remove();
  });
});
