jQuery(document).ready(function($){
var $galbox = $(".gallery-box");

$galbox.addClass('fade-init');
$('.title h1').addClass('fade-init');
$('.fp-hero-message .container').addClass('fade-init');
$('.code-box').addClass('fade-init');
$('.filter-nav').addClass('fade-init');

$galbox.each(function() {
  $(this).waypoint(function() {
    $(this.element).addClass('fadein-animation');
  }, {
      offset: '80%'
    });
});

$('.title h1').each(function() {
  $(this).waypoint(function() {
    $(this.element).addClass('fadein-animation');
  }, {
      offset: '80%'
    });
});

$('.fp-hero-message .container').each(function() {
  $(this).waypoint(function() {
    $(this.element).addClass('fadein-animation');
  }, {
      offset: '80%'
    });
});

$('.code-box').each(function() {
  $(this).waypoint(function() {
    $(this.element).addClass('fadein-animation');
  }, {
      offset: '80%'
    });
});

$('.filter-nav').each(function() {
  $(this).waypoint(function() {
    $(this.element).addClass('fadein-animation');
  }, {
      offset: '80%'
    });
});




// filter system:
$('.filter-nav-item#all').addClass('active');
$('.filter-nav-item#all').on('click', function(e){
  e.preventDefault();
  $('.filter-nav-item').removeClass("active");
  $(this).addClass('active');
  $(".gallery-box").removeClass("disapear");
});
$('.filter-nav-item#code').on('click', function(e){
  e.preventDefault();
  $('.filter-nav-item').removeClass("active");
  $(this).addClass('active');
  $(".gallery-box").removeClass("disapear");
  $(".gallery-box").not('.Code').toggleClass("disapear");
});
$('.filter-nav-item#electronics').on('click', function(e){
  e.preventDefault();
  $('.filter-nav-item').removeClass("active");
  $(this).addClass('active');
  $(".gallery-box").removeClass("disapear");
  $(".gallery-box").not('.Electronics').toggleClass("disapear");
});
$('.filter-nav-item#music').on('click', function(e){
  e.preventDefault();
  $('.filter-nav-item').removeClass("active");
  $(this).addClass('active');
  $(".gallery-box").removeClass("disapear");
  $(".gallery-box").not('.Music').toggleClass("disapear");
});


}); // end of jquery ready
