//* ===============================================
//* Menu
//* ===============================================
const menu = document.querySelector('#menu-icon');
const itemMenu = document.querySelector('.menu-item');

menu.addEventListener('click', () => {
  itemMenu.classList.toggle('activo');
});

//* ===============================================
//* Testimoniales
//* ===============================================
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

//* ===============================================
//* Aviso cookies
//* ===============================================

const btnAceptar = document.querySelector('#aceptar');
const avisoCookies = document.querySelector('#cookie');
const fondo = document.querySelector('#fondo-cookie');


if(!localStorage.getItem('cookies-aceptadas')){
  avisoCookies.classList.add('activo');
  fondo.classList.add('activo');
}

btnAceptar.addEventListener('click',()=>{

  avisoCookies.classList.remove('activo');
  fondo.classList.remove('activo');

  localStorage.setItem('cookies-aceptadas', true);

});