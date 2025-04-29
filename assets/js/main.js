/* ============= SHOW MENU ============= */

/* ============= Menu Show ============= */
/**Validate if constant exist */

/* ============= Hide Show  ============= */
/**Validate if constant exist */



/* ============= IMAGE GALLERY ============= */

/* ============= SWIPER CATEGORIES ============= */
var swiperCategories = new Swiper('.categories__container', {
  spaceBetween: 24,
  loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1400: {
      slidesPerView: 6,
      spaceBetween: 24,
    },
  },
});

/* ============= SWIPER PRODUCTS ============= */
var swiperProducts = new Swiper('.new__container', {
  spaceBetween: 24,
  loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 24,
    },
  },
});

/* ============= PRODUCTS TABS ============= */

const tabs = document.querySelectorAll('[data-target]'),
  tabContents = document.querySelectorAll('[content]');

tabs.forEach((tab) => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.target);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove('active-tab');
    });

    target.classList.add('active-tab');

    tabs.forEach((tab) => {
      tab.classList.remove('active-tab');
    });

    tab.classList.add('active-tab');
  });
});

/* ============= ACCOUNTS ============= */

document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".account__tab");
  const contents = document.querySelectorAll(".tab__content");

  tabs.forEach(tab => {
      tab.addEventListener("click", () => {
          // Hapus class 'active-tab' dari semua tab
          tabs.forEach(item => item.classList.remove("active-tab"));
          // Hapus class 'active-tab' dari semua konten
          contents.forEach(content => content.classList.remove("active-tab"));

          // Tambahkan class 'active-tab' ke tab yang diklik
          tab.classList.add("active-tab");

          // Dapatkan target tab dan tampilkan konten terkait
          const target = document.querySelector(tab.getAttribute("data-target"));
          if (target) {
              target.classList.add("active-tab");
          }
      });
  });
});
