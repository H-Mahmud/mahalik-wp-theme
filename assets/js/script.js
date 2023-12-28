const slide_1_swiper = new Swiper('.product-swiper-1', {
  // Optional parameters
  direction: 'horizontal',
  // reverseDirection: true,
  slidesPerView: 4,
  loop: false,
  initialSlide: 0,

  // If we need pagination
  // pagination: {
  //     el: '.swiper-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-1-next',
    prevEl: '.swiper-1-prev',
  },

  // // And if we need scrollbar
  // scrollbar: {
  //     el: '.swiper-1-scrollbar',
  // },
});

const latest_product_swiper = new Swiper('.swiper-latest', {
  // Optional parameters
  direction: 'horizontal',
  // reverseDirection: true,
  slidesPerView: 4,
  loop: false,
  initialSlide: 0,

  // If we need pagination
  // pagination: {
  //     el: '.swiper-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-latest-next',
    prevEl: '.swiper-latest-prev',
  },

  // // And if we need scrollbar
  // scrollbar: {
  //     el: '.swiper-1-scrollbar',
  // },
});
