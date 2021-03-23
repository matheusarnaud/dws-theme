/******/ (function() { // webpackBootstrap
/*!************************!*\
  !*** ./src/js/blog.js ***!
  \************************/
// import '../sass/blog.scss'
document.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelector('.wrapper-navbar');
  const modal = document.querySelector('.modal-wrapper');
  window.addEventListener("scroll", event => {
    let scroll = window.scrollY;

    if (scroll > document.querySelector('header').offsetHeight) {
      nav.style.background = "rgba(38, 50, 70, .95)";
    } else {
      nav.style.background = "rgba(38, 50, 70, 1)";
    }

    if (scroll > 300) {
      modal.classList.add("modal-transition");
    } else {
      modal.classList.remove("modal-transition");
    }
  });
  const topbtn = document.querySelector('.top-scroll');
  window.addEventListener("scroll", event => {
    let scroll = window.scrollY;

    if (scroll > 300) {
      topbtn.style.display = "flex";
    } else {
      topbtn.style.display = "none";
    }
  });
  topbtn.addEventListener("click", () => {
    window.scroll(0, 0);
  });
  const hamb = document.querySelector('.container-hamburguer input');
  hamb.addEventListener('change', () => {
    if (hamb.checked == true) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "auto";
    }
  });
  const button = document.querySelector('.button-search');
  const input = document.querySelector('#search-text');
  button.addEventListener('click', () => {
    input.focus();
  });
});
/******/ })()
;
//# sourceMappingURL=blog.js.map