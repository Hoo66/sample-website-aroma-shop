$('.slider').slick({
  fade: true,
  autoplaySpeed: 4000,
  speed: 1000,
  autoplay: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: '<div class="slick-prev"></div>"',
  nextArrow: '<div class="slick-next"></div>',
  dots: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
})

$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide) {
  $('.slider').slick('slickPlay');
})