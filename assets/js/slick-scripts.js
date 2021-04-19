jQuery(document).ready(function() {

  jQuery(".carousel").slick({
    dots: false,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev"><i class="material-icons medium">chevron_left</i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="material-icons medium">chevron_right</i></button>'
  });

});
