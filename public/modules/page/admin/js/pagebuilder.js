/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 14);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Modules/Page/Resources/assets/admin/js/PageBuilder.js":
/*!***************************************************************!*\
  !*** ./Modules/Page/Resources/assets/admin/js/PageBuilder.js ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return _default; });\n/* harmony import */ var grapesjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! grapesjs */ \"./Modules/Page/node_modules/grapesjs/dist/grapes.min.js\");\n/* harmony import */ var grapesjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(grapesjs__WEBPACK_IMPORTED_MODULE_0__);\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\n\n\nvar _default = /*#__PURE__*/function () {\n  function _default(options) {\n    var _$merge;\n\n    _classCallCheck(this, _default);\n\n    this.options = _.merge((_$merge = {\n      height: '100%',\n      showOffsets: 1,\n      noticeOnUnload: 0,\n      storageManager: {\n        autoload: 0\n      },\n      container: '#gjs',\n      fromElement: true,\n      showDevices: false\n    }, _defineProperty(_$merge, \"storageManager\", {\n      autosave: false,\n      setStepsBeforeSave: 1,\n      type: 'remote',\n      urlStore: '{{ route(\"admin.pages.design.post\") }}',\n      urlLoad: '{{ route(\"admin.pages.design.post\") }}',\n      contentTypeJson: true,\n      params: {\n        _token: '{{csrf_token()}}'\n      }\n    }), _defineProperty(_$merge, \"plugins\", ['grapesjs-lory-slider', 'gjs-preset-webpage', 'grapesjs-blocks-bootstrap4']), _defineProperty(_$merge, \"pluginsOpts\", {\n      'grapesjs-blocks-bootstrap4': {\n        blocks: {},\n        blockCategories: {},\n        labels: {},\n        gridDevicesPanel: true,\n        formPredefinedActions: [{\n          name: 'Contact',\n          value: '/contact'\n        }, {\n          name: 'landing',\n          value: '/landing'\n        }]\n      }\n    }), _defineProperty(_$merge, \"canvas\", {\n      styles: ['https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'],\n      scripts: ['https://code.jquery.com/jquery-3.5.1.slim.min.js', 'https://unpkg.com/@popperjs/core@2.9.2/dist/umd/popper.min.js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js']\n    }), _$merge), options);\n  }\n\n  _createClass(_default, [{\n    key: \"init\",\n    value: function init() {\n      grapesjs__WEBPACK_IMPORTED_MODULE_0___default.a.init(this.options);\n    }\n  }]);\n\n  return _default;\n}();\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9Nb2R1bGVzL1BhZ2UvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9QYWdlQnVpbGRlci5qcz9mYWJhIl0sIm5hbWVzIjpbIm9wdGlvbnMiLCJfIiwibWVyZ2UiLCJoZWlnaHQiLCJzaG93T2Zmc2V0cyIsIm5vdGljZU9uVW5sb2FkIiwic3RvcmFnZU1hbmFnZXIiLCJhdXRvbG9hZCIsImNvbnRhaW5lciIsImZyb21FbGVtZW50Iiwic2hvd0RldmljZXMiLCJhdXRvc2F2ZSIsInNldFN0ZXBzQmVmb3JlU2F2ZSIsInR5cGUiLCJ1cmxTdG9yZSIsInVybExvYWQiLCJjb250ZW50VHlwZUpzb24iLCJwYXJhbXMiLCJfdG9rZW4iLCJibG9ja3MiLCJibG9ja0NhdGVnb3JpZXMiLCJsYWJlbHMiLCJncmlkRGV2aWNlc1BhbmVsIiwiZm9ybVByZWRlZmluZWRBY3Rpb25zIiwibmFtZSIsInZhbHVlIiwic3R5bGVzIiwic2NyaXB0cyIsImdyYXBlc2pzIiwiaW5pdCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7O0FBQUE7OztBQUdJLG9CQUFZQSxPQUFaLEVBQXFCO0FBQUE7O0FBQUE7O0FBQ2pCLFNBQUtBLE9BQUwsR0FBZUMsQ0FBQyxDQUFDQyxLQUFGO0FBQ1hDLFlBQU0sRUFBRSxNQURHO0FBRVhDLGlCQUFXLEVBQUUsQ0FGRjtBQUdYQyxvQkFBYyxFQUFFLENBSEw7QUFJWEMsb0JBQWMsRUFBRTtBQUFFQyxnQkFBUSxFQUFFO0FBQVosT0FKTDtBQUtYQyxlQUFTLEVBQUUsTUFMQTtBQU1YQyxpQkFBVyxFQUFFLElBTkY7QUFPWEMsaUJBQVcsRUFBRTtBQVBGLGtEQVFLO0FBQ1pDLGNBQVEsRUFBRSxLQURFO0FBRVpDLHdCQUFrQixFQUFFLENBRlI7QUFHWkMsVUFBSSxFQUFFLFFBSE07QUFJWkMsY0FBUSxFQUFFLHdDQUpFO0FBS1pDLGFBQU8sRUFBRSx3Q0FMRztBQU1aQyxxQkFBZSxFQUFFLElBTkw7QUFPWkMsWUFBTSxFQUFFO0FBQUVDLGNBQU0sRUFBRTtBQUFWO0FBUEksS0FSTCx1Q0FpQkYsQ0FDTCxzQkFESyxFQUVMLG9CQUZLLEVBR0wsNEJBSEssQ0FqQkUsMkNBc0JFO0FBQ1Qsb0NBQThCO0FBQzFCQyxjQUFNLEVBQUUsRUFEa0I7QUFFMUJDLHVCQUFlLEVBQUUsRUFGUztBQUcxQkMsY0FBTSxFQUFFLEVBSGtCO0FBSTFCQyx3QkFBZ0IsRUFBRSxJQUpRO0FBSzFCQyw2QkFBcUIsRUFBRSxDQUNuQjtBQUFDQyxjQUFJLEVBQUUsU0FBUDtBQUFrQkMsZUFBSyxFQUFFO0FBQXpCLFNBRG1CLEVBRW5CO0FBQUNELGNBQUksRUFBRSxTQUFQO0FBQWtCQyxlQUFLLEVBQUU7QUFBekIsU0FGbUI7QUFMRztBQURyQixLQXRCRixzQ0FrQ0g7QUFDSkMsWUFBTSxFQUFFLENBQ0oseUVBREksQ0FESjtBQUlKQyxhQUFPLEVBQUUsQ0FDTCxrREFESyxFQUVMLCtEQUZLLEVBR0wsOEVBSEs7QUFKTCxLQWxDRyxhQTRDWjNCLE9BNUNZLENBQWY7QUE2Q0g7Ozs7MkJBRU07QUFDSDRCLHFEQUFRLENBQUNDLElBQVQsQ0FDSSxLQUFLN0IsT0FEVDtBQUdIIiwiZmlsZSI6Ii4vTW9kdWxlcy9QYWdlL1Jlc291cmNlcy9hc3NldHMvYWRtaW4vanMvUGFnZUJ1aWxkZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgZ3JhcGVzanMgZnJvbSAnZ3JhcGVzanMnO1xyXG5cclxuZXhwb3J0IGRlZmF1bHQgY2xhc3Mge1xyXG4gICAgY29uc3RydWN0b3Iob3B0aW9ucykge1xyXG4gICAgICAgIHRoaXMub3B0aW9ucyA9IF8ubWVyZ2Uoe1xyXG4gICAgICAgICAgICBoZWlnaHQ6ICcxMDAlJyxcclxuICAgICAgICAgICAgc2hvd09mZnNldHM6IDEsXHJcbiAgICAgICAgICAgIG5vdGljZU9uVW5sb2FkOiAwLFxyXG4gICAgICAgICAgICBzdG9yYWdlTWFuYWdlcjogeyBhdXRvbG9hZDogMCB9LFxyXG4gICAgICAgICAgICBjb250YWluZXI6ICcjZ2pzJyxcclxuICAgICAgICAgICAgZnJvbUVsZW1lbnQ6IHRydWUsXHJcbiAgICAgICAgICAgIHNob3dEZXZpY2VzOiBmYWxzZSxcclxuICAgICAgICAgICAgc3RvcmFnZU1hbmFnZXI6IHtcclxuICAgICAgICAgICAgICAgIGF1dG9zYXZlOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIHNldFN0ZXBzQmVmb3JlU2F2ZTogMSxcclxuICAgICAgICAgICAgICAgIHR5cGU6ICdyZW1vdGUnLFxyXG4gICAgICAgICAgICAgICAgdXJsU3RvcmU6ICd7eyByb3V0ZShcImFkbWluLnBhZ2VzLmRlc2lnbi5wb3N0XCIpIH19JyxcclxuICAgICAgICAgICAgICAgIHVybExvYWQ6ICd7eyByb3V0ZShcImFkbWluLnBhZ2VzLmRlc2lnbi5wb3N0XCIpIH19JyxcclxuICAgICAgICAgICAgICAgIGNvbnRlbnRUeXBlSnNvbjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIHBhcmFtczogeyBfdG9rZW46ICd7e2NzcmZfdG9rZW4oKX19JyB9LFxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBwbHVnaW5zOiBbXHJcbiAgICAgICAgICAgICAgICAnZ3JhcGVzanMtbG9yeS1zbGlkZXInLFxyXG4gICAgICAgICAgICAgICAgJ2dqcy1wcmVzZXQtd2VicGFnZScsXHJcbiAgICAgICAgICAgICAgICAnZ3JhcGVzanMtYmxvY2tzLWJvb3RzdHJhcDQnLFxyXG4gICAgICAgICAgICBdLFxyXG4gICAgICAgICAgICBwbHVnaW5zT3B0czoge1xyXG4gICAgICAgICAgICAgICAgJ2dyYXBlc2pzLWJsb2Nrcy1ib290c3RyYXA0Jzoge1xyXG4gICAgICAgICAgICAgICAgICAgIGJsb2Nrczoge30sXHJcbiAgICAgICAgICAgICAgICAgICAgYmxvY2tDYXRlZ29yaWVzOiB7fSxcclxuICAgICAgICAgICAgICAgICAgICBsYWJlbHM6IHt9LFxyXG4gICAgICAgICAgICAgICAgICAgIGdyaWREZXZpY2VzUGFuZWw6IHRydWUsXHJcbiAgICAgICAgICAgICAgICAgICAgZm9ybVByZWRlZmluZWRBY3Rpb25zOiBbXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHtuYW1lOiAnQ29udGFjdCcsIHZhbHVlOiAnL2NvbnRhY3QnfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge25hbWU6ICdsYW5kaW5nJywgdmFsdWU6ICcvbGFuZGluZyd9LFxyXG4gICAgICAgICAgICAgICAgICAgIF1cclxuICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGNhbnZhczoge1xyXG4gICAgICAgICAgICAgICAgc3R5bGVzOiBbXHJcbiAgICAgICAgICAgICAgICAgICAgJ2h0dHBzOi8vY2RuLmpzZGVsaXZyLm5ldC9ucG0vYm9vdHN0cmFwQDQuNS4zL2Rpc3QvY3NzL2Jvb3RzdHJhcC5taW4uY3NzJ1xyXG4gICAgICAgICAgICAgICAgXSxcclxuICAgICAgICAgICAgICAgIHNjcmlwdHM6IFtcclxuICAgICAgICAgICAgICAgICAgICAnaHR0cHM6Ly9jb2RlLmpxdWVyeS5jb20vanF1ZXJ5LTMuNS4xLnNsaW0ubWluLmpzJyxcclxuICAgICAgICAgICAgICAgICAgICAnaHR0cHM6Ly91bnBrZy5jb20vQHBvcHBlcmpzL2NvcmVAMi45LjIvZGlzdC91bWQvcG9wcGVyLm1pbi5qcycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2h0dHBzOi8vY2RuLmpzZGVsaXZyLm5ldC9ucG0vYm9vdHN0cmFwQDQuNS4zL2Rpc3QvanMvYm9vdHN0cmFwLmJ1bmRsZS5taW4uanMnXHJcbiAgICAgICAgICAgICAgICBdLFxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgIH0sIG9wdGlvbnMpO1xyXG4gICAgfVxyXG5cclxuICAgIGluaXQoKSB7XHJcbiAgICAgICAgZ3JhcGVzanMuaW5pdChcclxuICAgICAgICAgICAgdGhpcy5vcHRpb25zXHJcbiAgICAgICAgKTtcclxuICAgIH1cclxufVxyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Modules/Page/Resources/assets/admin/js/PageBuilder.js\n");

/***/ }),

/***/ "./Modules/Page/Resources/assets/admin/js/main.js":
/*!********************************************************!*\
  !*** ./Modules/Page/Resources/assets/admin/js/main.js ***!
  \********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _PageBuilder__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PageBuilder */ \"./Modules/Page/Resources/assets/admin/js/PageBuilder.js\");\n\nwindow.PageBuilder = _PageBuilder__WEBPACK_IMPORTED_MODULE_0__[\"default\"];//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9Nb2R1bGVzL1BhZ2UvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9tYWluLmpzP2FkNzQiXSwibmFtZXMiOlsid2luZG93IiwiUGFnZUJ1aWxkZXIiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUVBQSxNQUFNLENBQUNDLFdBQVAsR0FBcUJBLG9EQUFyQiIsImZpbGUiOiIuL01vZHVsZXMvUGFnZS9SZXNvdXJjZXMvYXNzZXRzL2FkbWluL2pzL21haW4uanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgUGFnZUJ1aWxkZXIgZnJvbSAnLi9QYWdlQnVpbGRlcic7XHJcblxyXG53aW5kb3cuUGFnZUJ1aWxkZXIgPSBQYWdlQnVpbGRlcjtcclxuXHJcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./Modules/Page/Resources/assets/admin/js/main.js\n");

/***/ }),

/***/ "./Modules/Page/node_modules/grapesjs/dist/grapes.min.js":
/*!***************************************************************!*\
  !*** ./Modules/Page/node_modules/grapesjs/dist/grapes.min.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


/***/ }),

/***/ 14:
/*!**************************************************************!*\
  !*** multi ./Modules/Page/Resources/assets/admin/js/main.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\laragon\www\fpttelecom\Modules\Page\Resources\assets\admin\js\main.js */"./Modules/Page/Resources/assets/admin/js/main.js");


/***/ })

/******/ });