const swiper = new Swiper('.swiper.home', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView:1,


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

    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
  const swiper2 = new Swiper('.swiper.partners', {
    // Optional parameters
    direction: 'horizontal',

    slidesPerView:3,




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

    breakpoints: {
        // when window width is <= 499px
        0: {
            slidesPerView: 1,

        },
        730: {
            slidesPerView: 2,

        },
        // when window width is <= 999px
    1000: {
            slidesPerView: 3,
            spaceBetweenSlides: 0
        }
    }

    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
