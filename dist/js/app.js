(() => {
  "use strict";
  let e = !0,
    t = (t = 500) => {
      let o = document.querySelector("body");
      if (e) {
        let l = document.querySelectorAll("[data-lp]");
        setTimeout(() => {
          for (let e = 0; e < l.length; e++) {
            l[e].style.paddingRight = "0px";
          }
          (o.style.paddingRight = "0px"),
            document.documentElement.classList.remove("lock");
        }, t),
          (e = !1),
          setTimeout(function () {
            e = !0;
          }, t);
      }
    },
    o = (t = 500) => {
      let o = document.querySelector("body");
      if (e) {
        let l = document.querySelectorAll("[data-lp]");
        for (let e = 0; e < l.length; e++) {
          l[e].style.paddingRight = "0px";
        }
        (o.style.paddingRight = "0px"),
          document.documentElement.classList.add("lock"),
          (e = !1),
          setTimeout(function () {
            e = !0;
          }, t);
      }
    };
  function l() {
    let l = document.querySelector(".burger");
    l &&
      l.addEventListener("click", function (l) {
        e &&
          (((e = 500) => {
            document.documentElement.classList.contains("lock") ? t(e) : o(e);
          })(),
          document.documentElement.classList.toggle("open"));
      });
  }
  l(),
    (window.FLS = !0),
    (function (e) {
      let t = new Image();
      (t.onload = t.onerror =
        function () {
          e(2 == t.height);
        }),
        (t.src =
          "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA");
    })(function (e) {
      let t = !0 === e ? "webp" : "no-webp";
      document.documentElement.classList.add(t);
    }),
    l(),
    flsScroll.pageNavigation(),
    flsScroll.headerScroll();
  const n = document.body,
    s = "scroll-up",
    c = "scroll-down";
  let d = 0;
  window.addEventListener("scroll", () => {
    const e = window.pageYOffset;
    e <= 0
      ? n.classList.remove(s)
      : (e > d && !n.classList.contains(c)
          ? (n.classList.remove(s), n.classList.add(c))
          : e < d &&
            n.classList.contains(c) &&
            (n.classList.remove(c), n.classList.add(s)),
        (d = e));
  });
})();
