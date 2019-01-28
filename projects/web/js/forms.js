$(document).ready(function() {
  $('#form').submit(function() {
    var buscar = $('#search').val();
    if (buscar == '') {
      return false;
    }else {
      return true;
    }
  });
   $('.search-icon').click(function() {
      $('.search-content').slideToggle();
    })
    $('.close').click(function() {
      $('.search-content').slideToggle();
    });
    $('.seeker').click(function() {
      $('.search-resp').slideToggle();
    })
    $('.closed').click(function() {
      $('.search-resp').slideToggle();
    });
    $('#form-search').submit(function() {
    var buscar = $('#word').val();
    if (buscar == '') {
      return false;
    }else {
      return true;
    }
  });
});
