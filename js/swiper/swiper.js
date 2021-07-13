//Swiperの設定
const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  autoplay: {
    delay: 4000,
  },
  speed: 500,
  loop: true,
  effect: 'fade',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})