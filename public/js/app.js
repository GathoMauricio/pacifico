/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("//require(\"./bootstrap\");\n$(document).ready(function () {\n  $(\".basic-multiple-select\").select2();\n  $(\"#form_buscar_titulo\").submit(function (e) {\n    e.preventDefault();\n    var ruta = $(\"#form_buscar_titulo\").prop(\"action\");\n    var q = $(\"#txt_buscar_titulo\").val();\n    if (q.length > 0) {\n      window.location = ruta + \"/\" + q;\n    }\n  });\n});\nwindow.buscarCategoria = function (categoria_id) {\n  if (categoria_id.length > 0) {\n    window.location = \"/categoria/\" + categoria_id;\n  } else {\n    window.location = \"/\";\n  }\n};\nwindow.mensajeCorrecto = function (texto) {\n  return alertify.success(texto);\n};\nwindow.mensajeError = function (texto) {\n  return alertify.error(texto);\n};\nwindow.eliminarLibro = function (libro_id) {\n  alertify.confirm(\"Alerta\", \"¿Realmente desea eliminar este registro?\", function () {\n    $(\"#form_libro_delete_\" + libro_id).submit();\n  }, function () {});\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzIiwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJzZWxlY3QyIiwic3VibWl0IiwiZSIsInByZXZlbnREZWZhdWx0IiwicnV0YSIsInByb3AiLCJxIiwidmFsIiwibGVuZ3RoIiwid2luZG93IiwibG9jYXRpb24iLCJidXNjYXJDYXRlZ29yaWEiLCJjYXRlZ29yaWFfaWQiLCJtZW5zYWplQ29ycmVjdG8iLCJ0ZXh0byIsImFsZXJ0aWZ5Iiwic3VjY2VzcyIsIm1lbnNhamVFcnJvciIsImVycm9yIiwiZWxpbWluYXJMaWJybyIsImxpYnJvX2lkIiwiY29uZmlybSJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FwcC5qcz9jZWQ2Il0sInNvdXJjZXNDb250ZW50IjpbIi8vcmVxdWlyZShcIi4vYm9vdHN0cmFwXCIpO1xuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAgICQoXCIuYmFzaWMtbXVsdGlwbGUtc2VsZWN0XCIpLnNlbGVjdDIoKTtcbiAgICAkKFwiI2Zvcm1fYnVzY2FyX3RpdHVsb1wiKS5zdWJtaXQoZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCBydXRhID0gJChcIiNmb3JtX2J1c2Nhcl90aXR1bG9cIikucHJvcChcImFjdGlvblwiKTtcbiAgICAgICAgY29uc3QgcSA9ICQoXCIjdHh0X2J1c2Nhcl90aXR1bG9cIikudmFsKCk7XG4gICAgICAgIGlmIChxLmxlbmd0aCA+IDApIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbiA9IHJ1dGEgKyBcIi9cIiArIHE7XG4gICAgICAgIH1cbiAgICB9KTtcbn0pO1xuXG53aW5kb3cuYnVzY2FyQ2F0ZWdvcmlhID0gKGNhdGVnb3JpYV9pZCkgPT4ge1xuICAgIGlmIChjYXRlZ29yaWFfaWQubGVuZ3RoID4gMCkge1xuICAgICAgICB3aW5kb3cubG9jYXRpb24gPSBcIi9jYXRlZ29yaWEvXCIgKyBjYXRlZ29yaWFfaWQ7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgd2luZG93LmxvY2F0aW9uID0gXCIvXCI7XG4gICAgfVxufTtcblxud2luZG93Lm1lbnNhamVDb3JyZWN0byA9ICh0ZXh0bykgPT4gYWxlcnRpZnkuc3VjY2Vzcyh0ZXh0byk7XG5cbndpbmRvdy5tZW5zYWplRXJyb3IgPSAodGV4dG8pID0+IGFsZXJ0aWZ5LmVycm9yKHRleHRvKTtcblxud2luZG93LmVsaW1pbmFyTGlicm8gPSAobGlicm9faWQpID0+IHtcbiAgICBhbGVydGlmeS5jb25maXJtKFxuICAgICAgICBcIkFsZXJ0YVwiLFxuICAgICAgICBcIsK/UmVhbG1lbnRlIGRlc2VhIGVsaW1pbmFyIGVzdGUgcmVnaXN0cm8/XCIsXG4gICAgICAgIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQoXCIjZm9ybV9saWJyb19kZWxldGVfXCIgKyBsaWJyb19pZCkuc3VibWl0KCk7XG4gICAgICAgIH0sXG4gICAgICAgIGZ1bmN0aW9uICgpIHt9XG4gICAgKTtcbn07XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLENBQUNDLEtBQUssQ0FBQyxZQUFZO0VBQzFCRixDQUFDLENBQUMsd0JBQXdCLENBQUMsQ0FBQ0csT0FBTyxDQUFDLENBQUM7RUFDckNILENBQUMsQ0FBQyxxQkFBcUIsQ0FBQyxDQUFDSSxNQUFNLENBQUMsVUFBVUMsQ0FBQyxFQUFFO0lBQ3pDQSxDQUFDLENBQUNDLGNBQWMsQ0FBQyxDQUFDO0lBQ2xCLElBQU1DLElBQUksR0FBR1AsQ0FBQyxDQUFDLHFCQUFxQixDQUFDLENBQUNRLElBQUksQ0FBQyxRQUFRLENBQUM7SUFDcEQsSUFBTUMsQ0FBQyxHQUFHVCxDQUFDLENBQUMsb0JBQW9CLENBQUMsQ0FBQ1UsR0FBRyxDQUFDLENBQUM7SUFDdkMsSUFBSUQsQ0FBQyxDQUFDRSxNQUFNLEdBQUcsQ0FBQyxFQUFFO01BQ2RDLE1BQU0sQ0FBQ0MsUUFBUSxHQUFHTixJQUFJLEdBQUcsR0FBRyxHQUFHRSxDQUFDO0lBQ3BDO0VBQ0osQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDO0FBRUZHLE1BQU0sQ0FBQ0UsZUFBZSxHQUFHLFVBQUNDLFlBQVksRUFBSztFQUN2QyxJQUFJQSxZQUFZLENBQUNKLE1BQU0sR0FBRyxDQUFDLEVBQUU7SUFDekJDLE1BQU0sQ0FBQ0MsUUFBUSxHQUFHLGFBQWEsR0FBR0UsWUFBWTtFQUNsRCxDQUFDLE1BQU07SUFDSEgsTUFBTSxDQUFDQyxRQUFRLEdBQUcsR0FBRztFQUN6QjtBQUNKLENBQUM7QUFFREQsTUFBTSxDQUFDSSxlQUFlLEdBQUcsVUFBQ0MsS0FBSztFQUFBLE9BQUtDLFFBQVEsQ0FBQ0MsT0FBTyxDQUFDRixLQUFLLENBQUM7QUFBQTtBQUUzREwsTUFBTSxDQUFDUSxZQUFZLEdBQUcsVUFBQ0gsS0FBSztFQUFBLE9BQUtDLFFBQVEsQ0FBQ0csS0FBSyxDQUFDSixLQUFLLENBQUM7QUFBQTtBQUV0REwsTUFBTSxDQUFDVSxhQUFhLEdBQUcsVUFBQ0MsUUFBUSxFQUFLO0VBQ2pDTCxRQUFRLENBQUNNLE9BQU8sQ0FDWixRQUFRLEVBQ1IsMENBQTBDLEVBQzFDLFlBQVk7SUFDUnhCLENBQUMsQ0FBQyxxQkFBcUIsR0FBR3VCLFFBQVEsQ0FBQyxDQUFDbkIsTUFBTSxDQUFDLENBQUM7RUFDaEQsQ0FBQyxFQUNELFlBQVksQ0FBQyxDQUNqQixDQUFDO0FBQ0wsQ0FBQyJ9\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2NzcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz9hODBiIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;