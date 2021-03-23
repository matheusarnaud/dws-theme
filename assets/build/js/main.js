/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/blog.js":
/*!************************!*\
  !*** ./src/js/blog.js ***!
  \************************/
/***/ (function() {

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

/***/ }),

/***/ "./src/js/category.js":
/*!****************************!*\
  !*** ./src/js/category.js ***!
  \****************************/
/***/ (function() {

document.addEventListener('DOMContentLoaded', function () {
  hamb = document.querySelector('.container-hamburguer input');
  hamb.addEventListener("change", () => {
    if (hamb.checked) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "auto";
    }
  });
  const modal = document.querySelector('.modal-wrapper');
  window.addEventListener("scroll", () => {
    let scroll = window.scrollY;

    if (scroll > 300) {
      modal.classList.add("modal-transition");
    } else {
      modal.classList.remove("modal-transition");
    }
  });
  const button = document.querySelector('.button-search');
  const input = document.querySelector('#search-text');
  button.addEventListener('click', () => {
    input.focus();
  });
});

/***/ }),

/***/ "./src/js/home.js":
/*!************************!*\
  !*** ./src/js/home.js ***!
  \************************/
/***/ (function() {

document.addEventListener('DOMContentLoaded', function () {
  let acc = document.getElementsByClassName("accordion");

  for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      if (this.classList.contains("active-accordion")) {
        this.classList.remove('active-accordion');
        var panel = this.nextElementSibling;
        panel.style.display = "none";
      } else {
        for (i = 0; i < acc.length; i++) {
          acc[i].classList.remove('active-accordion');
          var panel = acc[i].nextElementSibling;
          panel.style.display = "none";
        }

        this.classList.toggle("active-accordion");
        var panel = this.nextElementSibling;

        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      }
    });
  }

  const topbtn = document.querySelector('.top-scroll');
  const modal = document.querySelector('.modal-wrapper');
  topbtn.style.top = "85px";
  window.addEventListener("scroll", event => {
    let scroll = window.scrollY;

    if (scroll > 300) {
      topbtn.style.display = "flex";
    } else {
      topbtn.style.display = "none";
    }

    if (scroll > 300) {
      modal.classList.add("modal-transition");
    } else {
      modal.classList.remove("modal-transition");
    }
  });
  topbtn.addEventListener("click", () => {
    window.scroll(0, 0);
  });
  const hamb = document.querySelector('.container-hamburguer input');
  const header = document.querySelector('header');
  hamb.addEventListener('change', () => {
    if (hamb.checked == true) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "auto";
    }
  });
});

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _img_amil_svg__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../img/amil.svg */ "./src/img/amil.svg");
/* harmony import */ var _img_arrow_up_solid_svg__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../img/arrow-up-solid.svg */ "./src/img/arrow-up-solid.svg");
/* harmony import */ var _img_bradesco_svg__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../img/bradesco.svg */ "./src/img/bradesco.svg");
/* harmony import */ var _img_calendar_solid_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../img/calendar-solid.svg */ "./src/img/calendar-solid.svg");
/* harmony import */ var _img_clock_solid_svg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../img/clock-solid.svg */ "./src/img/clock-solid.svg");
/* harmony import */ var _img_close_svg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../img/close.svg */ "./src/img/close.svg");
/* harmony import */ var _img_check_green_svg__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../img/check-green.svg */ "./src/img/check-green.svg");
/* harmony import */ var _img_check_solid_svg__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../img/check-solid.svg */ "./src/img/check-solid.svg");
/* harmony import */ var _img_dws_vector_white_min_svg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../img/dws-vector-white-min.svg */ "./src/img/dws-vector-white-min.svg");
/* harmony import */ var _img_dws_vector_white_svg__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../img/dws-vector-white.svg */ "./src/img/dws-vector-white.svg");
/* harmony import */ var _img_dws_vector_svg__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../img/dws-vector.svg */ "./src/img/dws-vector.svg");
/* harmony import */ var _img_Imagens_simulador_1_jpg__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../img/Imagens-simulador-1.jpg */ "./src/img/Imagens-simulador-1.jpg");
/* harmony import */ var _img_Imagens_simulador_jpg__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../img/Imagens-simulador.jpg */ "./src/img/Imagens-simulador.jpg");
/* harmony import */ var _img_notredame_svg__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../img/notredame.svg */ "./src/img/notredame.svg");
/* harmony import */ var _img_omint_svg__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ../img/omint.svg */ "./src/img/omint.svg");
/* harmony import */ var _img_portoseguro_svg__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ../img/portoseguro.svg */ "./src/img/portoseguro.svg");
/* harmony import */ var _img_sulamerica_svg__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ../img/sulamerica.svg */ "./src/img/sulamerica.svg");
/* harmony import */ var _single__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./single */ "./src/js/single.js");
/* harmony import */ var _single__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(_single__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var _blog__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./blog */ "./src/js/blog.js");
/* harmony import */ var _blog__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(_blog__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var _home__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./home */ "./src/js/home.js");
/* harmony import */ var _home__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(_home__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var _category__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./category */ "./src/js/category.js");
/* harmony import */ var _category__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(_category__WEBPACK_IMPORTED_MODULE_20__);
// IMG
















 // JS





console.log('hi a');

/***/ }),

/***/ "./src/js/single.js":
/*!**************************!*\
  !*** ./src/js/single.js ***!
  \**************************/
/***/ (function() {

// import '../sass/single.scss'
document.addEventListener('DOMContentLoaded', function () {
  const nav = document.querySelector('.wrapper-navbar');
  window.addEventListener("scroll", event => {
    let scroll = window.scrollY;

    if (scroll > document.querySelector('header').offsetHeight) {
      nav.style.background = "rgba(38, 50, 70, .95)";
    } else {
      nav.style.background = "rgba(38, 50, 70, 1)";
    }
  }); // PROGRESS BAR

  const footer = document.querySelector("footer");
  const progressBarEl = document.querySelector(".progress-bar-container-progress");
  window.addEventListener("scroll", event => {
    let scroll = window.scrollY;
    let percent = scroll / (document.body.offsetHeight - window.innerHeight - footer.offsetHeight) * 100;

    if (scroll > 0) {
      progressBarEl.style.width = `${percent}%`;
    }
  });
  const topbtn = document.querySelector('.top-scroll');
  const modal = document.querySelector('.modal-wrapper');
  window.addEventListener("scroll", event => {
    let scroll = window.scrollY;

    if (scroll > 300) {
      topbtn.style.display = "flex";
    } else {
      topbtn.style.display = "none";
    }

    if (scroll > 300) {
      modal.classList.add("modal-transition");
    } else {
      modal.classList.remove("modal-transition");
    }
  });
  topbtn.addEventListener("click", () => {
    window.scroll(0, 0);
  });

  function post_time() {
    const divtext = document.querySelector(".text-content");
    const words = divtext.innerText.split(" ").length;
    const r_time = Math.round(words / 200);
    const text = document.createTextNode(`Leitura de ${r_time} minutos`);
    const text_location = document.querySelector(".time > p");

    if (text_location) {
      text_location.appendChild(text);
    }
  }

  post_time();
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

/***/ }),

/***/ "./src/img/Imagens-simulador-1.jpg":
/*!*****************************************!*\
  !*** ./src/img/Imagens-simulador-1.jpg ***!
  \*****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/Imagens-simulador-1.jpg");

/***/ }),

/***/ "./src/img/Imagens-simulador.jpg":
/*!***************************************!*\
  !*** ./src/img/Imagens-simulador.jpg ***!
  \***************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/Imagens-simulador.jpg");

/***/ }),

/***/ "./src/img/amil.svg":
/*!**************************!*\
  !*** ./src/img/amil.svg ***!
  \**************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/amil.svg");

/***/ }),

/***/ "./src/img/arrow-up-solid.svg":
/*!************************************!*\
  !*** ./src/img/arrow-up-solid.svg ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/arrow-up-solid.svg");

/***/ }),

/***/ "./src/img/bradesco.svg":
/*!******************************!*\
  !*** ./src/img/bradesco.svg ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/bradesco.svg");

/***/ }),

/***/ "./src/img/calendar-solid.svg":
/*!************************************!*\
  !*** ./src/img/calendar-solid.svg ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/calendar-solid.svg");

/***/ }),

/***/ "./src/img/check-green.svg":
/*!*********************************!*\
  !*** ./src/img/check-green.svg ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/check-green.svg");

/***/ }),

/***/ "./src/img/check-solid.svg":
/*!*********************************!*\
  !*** ./src/img/check-solid.svg ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/check-solid.svg");

/***/ }),

/***/ "./src/img/clock-solid.svg":
/*!*********************************!*\
  !*** ./src/img/clock-solid.svg ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/clock-solid.svg");

/***/ }),

/***/ "./src/img/close.svg":
/*!***************************!*\
  !*** ./src/img/close.svg ***!
  \***************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/close.svg");

/***/ }),

/***/ "./src/img/dws-vector-white-min.svg":
/*!******************************************!*\
  !*** ./src/img/dws-vector-white-min.svg ***!
  \******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/dws-vector-white-min.svg");

/***/ }),

/***/ "./src/img/dws-vector-white.svg":
/*!**************************************!*\
  !*** ./src/img/dws-vector-white.svg ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/dws-vector-white.svg");

/***/ }),

/***/ "./src/img/dws-vector.svg":
/*!********************************!*\
  !*** ./src/img/dws-vector.svg ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/dws-vector.svg");

/***/ }),

/***/ "./src/img/notredame.svg":
/*!*******************************!*\
  !*** ./src/img/notredame.svg ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/notredame.svg");

/***/ }),

/***/ "./src/img/omint.svg":
/*!***************************!*\
  !*** ./src/img/omint.svg ***!
  \***************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/omint.svg");

/***/ }),

/***/ "./src/img/portoseguro.svg":
/*!*********************************!*\
  !*** ./src/img/portoseguro.svg ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/portoseguro.svg");

/***/ }),

/***/ "./src/img/sulamerica.svg":
/*!********************************!*\
  !*** ./src/img/sulamerica.svg ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/sulamerica.svg");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./src/js/main.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;
//# sourceMappingURL=main.js.map