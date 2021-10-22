$('.menu-trigger').on('click', function() {
  $('.overlay').fadeIn(400);
  $('.main-nav').addClass('active');
});

$('.overlay, .main-nav-item').on('click', function() {
  $('.overlay').fadeOut(400);
  $('.main-nav').removeClass('active');
});