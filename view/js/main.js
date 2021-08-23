/*=================================================
Menu
=================================================*/
const menu = document.querySelector('#menu-icon');
const itemMenu = document.querySelector('.menu-item');

menu.addEventListener('click', () => {
  itemMenu.classList.toggle('activo');
});

/*=================================================
Testimoniales
=================================================*/
$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    loop: true,
    responsiveClass: true,
    nav: false,
    dots: false,
    margin: 20,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
    },
  });
});
