$(document).ready(function() {
  $('.menu-toggle').click(function() {
    $('.navbar-default').toggleClass('right');
  });
  $('.nv-item').click(function() {
    $(this).siblings().removeClass('toggle');
    $(this).toggleClass('toggle');
  });
  $('.search').click(function() {
     $('.wrapper-form').slideToggle();
   })
   $('.close').click(function() {
     $('.wrapper-form').slideToggle();
   });
});
