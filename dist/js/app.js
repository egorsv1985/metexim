"use strict";

document.addEventListener("DOMContentLoaded", function () {
  let scrollLocked = false;

  const unlockScroll = (delay = 500) => {
    const body = document.querySelector("body");

    if (scrollLocked) {
      const elements = document.querySelectorAll("[data-lp]");

      for (let i = 0; i < elements.length; i++) {
        elements[i].style.paddingRight = "0px";
      }

      body.style.paddingRight = "0px";

      document.documentElement.classList.remove("lock");

      scrollLocked = false;

      setTimeout(function () {
        scrollLocked = true;

        console.log("Скролл разблокирован");
      }, delay);
    }
  };

  const lockScroll = (delay = 500) => {
    const body = document.querySelector("body");

    if (!scrollLocked) {
      const elements = document.querySelectorAll("[data-lp]");

      for (let i = 0; i < elements.length; i++) {
        elements[i].style.paddingRight = `${
          window.innerWidth - document.documentElement.clientWidth
        }px`;
      }

      body.style.paddingRight = `${
        window.innerWidth - document.documentElement.clientWidth
      }px`;

      document.documentElement.classList.add("lock");

      scrollLocked = true;

      setTimeout(function () {
        scrollLocked = false;
        console.log("Скролл заблокирован");
      }, delay);
    }
  };

  function handleBurgerClick() {
    const burger = document.querySelector(".burger");

    if (burger) {
      burger.addEventListener("click", function (event) {
        if (scrollLocked) {
          unlockScroll();
          console.log("Скролл разблокирован");
        } else {
          lockScroll();
          console.log("Скролл заблокирован");
        }

        document.documentElement.classList.toggle("open");
      });
    }
  }

  handleBurgerClick();

  var promo = document.getElementById("promo");

  if (promo) {
    var promoSwiper = new Swiper(".promoSwiper", {
      slidesPerView: 1,
      autoplay: {
        delay: 2000,
      },
      loop: true,

      grabCursor: true,
      keyboard: {
        enabled: true,
      },

      navigation: {
        nextEl: ".promo .swiper-button-next",
        prevEl: ".promo .swiper-button-prev",
      },

      pagination: {
        el: ".promo .swiper-pagination",
        clickable: true,

        renderBullet: function (index, className) {
          return (
            '<span class="' +
            className +
            '">' +
            '<span class="prev-slide">' +
            ("" + (index + 1)).slice(-2) +
            "</span>" +
            '<span class="slash"></span>' +
            '<span class="next-slide">' +
            ("" + this.slides.length).slice(-2) +
            "</span>" +
            "</span>"
          );
        },
      },
    });
  }

  var contentSwiper = new Swiper(".contentSwiper", {
    slidesPerView: 1,

    loop: true,

    grabCursor: true,

    keyboard: {
      enabled: true,
    },

    navigation: {
      nextEl: ".content .swiper-button-next",
      prevEl: ".content .swiper-button-prev",
    },

    pagination: {
      el: ".content .swiper-pagination",
      clickable: true,

      renderBullet: function (index, className) {
        return (
          '<span class="' +
          className +
          '">' +
          '<span class="prev-slide">' +
          ("" + (index + 1)).slice(-2) +
          "</span>" +
          '<span class="slash"></span>' +
          '<span class="next-slide">' +
          ("" + this.slides.length).slice(-2) +
          "</span>" +
          "</span>"
        );
      },
    },
  });

  var dogovorSwiper = new Swiper(".dogovorSwiper ", {
    slidesPerView: 1,

    loop: true,

    grabCursor: true,

    keyboard: {
      enabled: true,
    },
    centeredSlides: true,

    navigation: {
      nextEl: ".content-box  .swiper-button-next",
      prevEl: ".content-box  .swiper-button-prev",
    },
  });

  var licenzijaSwiper = new Swiper(".licenzijaSwiper", {
    slidesPerView: 1,

    loop: true,

    grabCursor: true,

    keyboard: {
      enabled: true,
    },
    centeredSlides: true,

    navigation: {
      nextEl: ".content-box .swiper-button-next",
      prevEl: ".content-box .swiper-button-prev",
    },
  });

  ((callback) => {
    const image = new Image();

    image.onload = image.onerror = () => callback(image.height === 2);

    image.src =
      "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
  })((supported) => document.documentElement.classList.add(supported ? "webp" : "no-webp"));

  function handleStickyElements() {
    const elements = document.querySelectorAll("[data-sticky]");
    const container = document.querySelector(".container");

    elements.forEach((element) => {
      const stickyTop = parseInt(element.dataset.stickyTop) || 0;
      const stickyBottom = parseInt(element.dataset.stickyBottom) || 0;

      const isHeaderSticky = element.hasAttribute("data-sticky-header");

      const headerHeight = isHeaderSticky
        ? document.querySelector("header.header").offsetHeight
        : 0;

      const stickyItem = element.querySelector("[data-sticky-item]");

      if (!stickyItem) {
        return;
      }

      const sectionTop = element.offsetTop;
      const sectionBottom = sectionTop + element.offsetHeight;

      function handleScroll() {
        const scrollY = window.scrollY;
        const stickyItemRect = stickyItem.getBoundingClientRect();

        if (scrollY >= sectionTop && scrollY <= sectionBottom) {
          const stickyItemTop =
            stickyItemRect.top + scrollY - (headerHeight + stickyTop);
          const stickyItemBottom =
            sectionBottom -
            (headerHeight + stickyItem.offsetHeight + stickyBottom);

          if (scrollY >= stickyItemTop && scrollY <= stickyItemBottom) {
            stickyItem.style.position = "fixed";
            stickyItem.style.bottom = "auto";
            stickyItem.style.top = `${headerHeight + stickyTop}px`;
            stickyItem.style.right = "auto";
            stickyItem.style.width = "auto";
            stickyItem.style.maxWidth = "356px";
          } else if (scrollY > stickyItemBottom) {
            stickyItem.style.position = "relative";
            stickyItem.style.bottom = `${stickyBottom}px`;
            stickyItem.style.top = "auto";
            stickyItem.style.right = "auto";
            stickyItem.style.width = "auto";

            const containerRight = container.offsetLeft + container.offsetWidth;
            const stickyItemRight =
              stickyItem.offsetLeft + stickyItem.offsetWidth;
            if (stickyItemRight >= containerRight) {
              stickyItem.style.width = `${
                containerRight - stickyItem.offsetLeft
              }px`;
            }
          } else {
            stickyItem.style.position = "relative";
            stickyItem.style.bottom = "auto";
            stickyItem.style.top = `${stickyTop}px`;
            stickyItem.style.right = "auto";
            stickyItem.style.width = "auto";
          }
        } else {
          stickyItem.style.position = "relative";
          stickyItem.style.bottom = "auto";
          stickyItem.style.top = "auto";
          stickyItem.style.right = "auto";
          stickyItem.style.width = "auto";
        }
      }

      window.addEventListener("scroll", handleScroll);
    });
  }

  if ("scroll" in window) {
    handleStickyElements();
  }

  const popupLinks = document.querySelectorAll("[data-popup]");
  const closeButtons = document.querySelectorAll("[data-close]");

  function togglePopup(event) {
    event.preventDefault();

    const popupId = this.getAttribute("data-popup");
    const popup = document.querySelector(popupId);

    document.body.classList.toggle("popup-show");
    popup.classList.toggle("popup_show");
  }

  function closePopup() {
    const popup = document.querySelector(".popup_show");

    document.body.classList.remove("popup-show");
    popup.classList.remove("popup_show");
  }

  popupLinks.forEach(function (link) {
    link.addEventListener("click", togglePopup);
  });

  closeButtons.forEach(function (button) {
    button.addEventListener("click", closePopup);
  });

  var telInputs = document.querySelectorAll('input[type="tel"]');

  telInputs.forEach(function (telInput) {
    telInput.addEventListener("input", function () {
      this.value = this.value.replace(/\D/g, "");

      if (this.value.length > 11) {
        this.value = this.value.slice(0, 11);
      }
    });
  });
  $(document).ready(function () {
    Fancybox.bind(".fancy", {
      // Your custom options
    });
  });
})();
