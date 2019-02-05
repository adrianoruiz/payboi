webpackJsonp([11],{

/***/ 101:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ChatPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the ChatPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var ChatPage = /** @class */ (function () {
    function ChatPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    ChatPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad ChatPage');
    };
    ChatPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-chat',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/chat/chat.html"*/'<ion-header>\n  <header-custom></header-custom>\n</ion-header>\n\n<ion-content padding>\n  <div>\n    <ion-row>\n      <ion-col no-padding text-center>\n        <p no-margin>\n          <small>Friboi tem interesse de compra 05/02/1019</small>\n        </p>\n      </ion-col>\n    </ion-row>\n\n    <ion-item no-lines no-margin no-padding text-wrap>\n      <ion-avatar item-left>\n      </ion-avatar>\n      <div margin-left class="chatbox chatbox-right">Boa Tarde</div>\n    </ion-item>\n\n    <ion-row>\n      <ion-col no-padding text-center>\n        <p no-margin>\n          <small>Fev 5, 2019, 2:13 PM</small>\n        </p>\n      </ion-col>\n    </ion-row>\n    <ion-item no-lines no-margin no-padding text-wrap>\n      <ion-avatar item-left>\n        <img src="../../assets/imgs/fazenda2.jpg">\n      </ion-avatar>\n      <div class="chatbox">Boa tarde</div>\n    </ion-item>\n\n    <ion-row>\n        <ion-col no-padding text-center>\n          <p no-margin>\n            <small>Fev 5, 2019, 2:41 PM</small>\n          </p>\n        </ion-col>\n      </ion-row>\n  \n      <ion-item no-lines no-margin no-padding text-wrap>\n        <ion-avatar item-left>\n        </ion-avatar>\n        <div margin-left class="chatbox chatbox-right">Vamos fechar</div>\n      </ion-item>\n  \n      <ion-row>\n        <ion-col no-padding text-center>\n          <p no-margin>\n            <small>Fev 5, 2019, 2:55 PM</small>\n          </p>\n        </ion-col>\n      </ion-row>\n      <ion-item no-lines no-margin no-padding text-wrap>\n        <ion-avatar item-left>\n          <img src="../../assets/imgs/fazenda2.jpg">\n        </ion-avatar>\n        <div class="chatbox">Sim</div>\n      </ion-item>\n  </div>\n  <ion-item no-lines no-margin no-padding text-wrap *ngIf="send_like_icon" item-right>\n    <ion-avatar item-right>\n      <img src="https://randomuser.me/api/portraits/men/43.jpg">\n    </ion-avatar>\n    <div text-right [ngClass]="{\'like-msg-btn\': likeBtnVisible }">\n      <ion-icon name="heart" [ngClass]="{\'like-btn\': likeBtnVisible, \'heart-size\': true }" color="danger"></ion-icon>\n    </div>\n  </ion-item>\n\n  <button  ion-button block style="border-radius:16px;background-color: #00C464; bottom: 5px;\n  width: 90%;position:absolute"> Fechar</button>\n</ion-content>\n<ion-footer text-center style="background-color: #00a04d;">\n  <ion-toolbar>\n    <ion-buttons start left>\n      <button ion-button icon-right>\n      </button>\n    </ion-buttons>\n    <div style="background: #fff; border-radius: 8px">\n      <ion-input type="text" value="" [(ngModel)]="input_message"></ion-input>\n    </div>\n\n    <ion-buttons end>\n      <button ion-button icon-right>\n        <ion-icon name="ios-paper-plane"></ion-icon>\n      </button>\n    </ion-buttons>\n  </ion-toolbar>\n</ion-footer>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/chat/chat.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], ChatPage);
    return ChatPage;
}());

//# sourceMappingURL=chat.js.map

/***/ }),

/***/ 102:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ContatoPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the ContatoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var ContatoPage = /** @class */ (function () {
    function ContatoPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    ContatoPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad ContatoPage');
    };
    ContatoPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-contato',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/contato/contato.html"*/'\n<ion-header>\n\n    <header-custom></header-custom>\n\n</ion-header>\n\n\n<ion-content padding>\n<p><b>Acesse: </b> <a href="http://payboi.sevenclicks.us/" target="_blank">http://payboi.sevenclicks.us/</a></p>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/contato/contato.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], ContatoPage);
    return ContatoPage;
}());

//# sourceMappingURL=contato.js.map

/***/ }),

/***/ 103:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return EmpresasPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the EmpresasPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var EmpresasPage = /** @class */ (function () {
    function EmpresasPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    EmpresasPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad EmpresasPage');
    };
    EmpresasPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-empresas',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/empresas/empresas.html"*/'\n<ion-header>\n    <header-custom></header-custom>\n</ion-header>\n\n\n<ion-content padding>\n<ion-row class="h-50" style="background-image:url(\'../../assets/imgs/friboi.png\'); background-repeat: no-repeat;background-size: cover;background-position: center;border-radius: 8px;border: 1px solid #484848;">\n\n</ion-row>\n\n<ion-row class="h-50" style="margin-top:10px;background-image:url(\'../../assets/imgs/torlin.png\'); background-repeat: no-repeat;background-size: cover;background-position: center;border-radius: 8px;border: 1px solid #484848;">\n\n\n</ion-row>\n</ion-content>\n\n '/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/empresas/empresas.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], EmpresasPage);
    return EmpresasPage;
}());

//# sourceMappingURL=empresas.js.map

/***/ }),

/***/ 104:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return LoginPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__home_home__ = __webpack_require__(46);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__register_register__ = __webpack_require__(105);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




/**
 * Generated class for the LoginPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var LoginPage = /** @class */ (function () {
    function LoginPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    LoginPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad LoginPage');
    };
    LoginPage.prototype.login = function () {
        this.navCtrl.setRoot(__WEBPACK_IMPORTED_MODULE_2__home_home__["a" /* HomePage */]);
    };
    LoginPage.prototype.register = function () {
        this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_3__register_register__["a" /* RegisterPage */]);
    };
    LoginPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-login',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/login/login.html"*/'<ion-content no-padding style="background-color: #032040;">\n\n  <ion-row class="h-60" style="background-image:url(\'../../assets/imgs/bg-login.jpg\');    -webkit-border-radius: 50px;\n  -moz-border-radius: 0 0px 50% 50%;\n  border-radius: 0 0px 50% 50%;\n  border: none;">\n    <img src="../../assets/imgs/logo_login.png" alt="" style="max-height: 20%;position: absolute;bottom: 42%;right: 0;left: 0;margin: auto;">\n  </ion-row>\n\n  <ion-row padding >\n    <ion-item no-padding style="background-color: #032040;" >\n      <ion-label fixed>E-mail</ion-label>\n      <ion-input type="mail" value=""></ion-input>\n    </ion-item>\n\n    <ion-item no-padding style="background-color: #032040;">\n      <ion-label fixed>Senha</ion-label>\n      <ion-input type="password"></ion-input>\n    </ion-item>\n\n    <button ion-button block style="margin-top:15px;border-radius: 18px;background-color:white; color:#032040" (click)="login()">Entrar</button>\n  </ion-row>\n  <ion-row>\n    <ion-col text-center>\n      <b style="color:white" (click)="register()"> Cadastre-se</b>  \n    </ion-col>\n  </ion-row>\n\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/login/login.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], LoginPage);
    return LoginPage;
}());

//# sourceMappingURL=login.js.map

/***/ }),

/***/ 105:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return RegisterPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__home_home__ = __webpack_require__(46);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



/**
 * Generated class for the RegisterPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var RegisterPage = /** @class */ (function () {
    function RegisterPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    RegisterPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad RegisterPage');
    };
    RegisterPage.prototype.register = function () {
        this.navCtrl.setRoot(__WEBPACK_IMPORTED_MODULE_2__home_home__["a" /* HomePage */]);
    };
    RegisterPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-register',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/register/register.html"*/'<ion-content no-padding style="background-color: #032040;">\n  <ion-row class="h-25" style="background-color:#02D258;-webkit-border-radius: 50px;\n    -moz-border-radius: 0 0px 50% 50%;\n    border-radius: 0 0px 50% 50%;\n    border: none;">\n    <img src="../../assets/imgs/logo_login.png" alt="" style="max-height: 20%;position: absolute;top: 3%;right: 0;left: 0;margin: auto;">\n  </ion-row>\n  <ion-row>\n    <ion-col text-center>\n      <h5 style="color:white">\n        Cadastro\n      </h5>\n    </ion-col>\n  </ion-row>\n  <ion-row padding>\n    <ion-item no-padding style="background-color: #032040;">\n      <ion-label fixed>Nome</ion-label>\n      <ion-input type="text" value=""></ion-input>\n    </ion-item>\n    <ion-item no-padding style="background-color: #032040;">\n      <ion-label fixed>E-mail</ion-label>\n      <ion-input type="mail" value=""></ion-input>\n    </ion-item>\n    <ion-item no-padding style="background-color: #032040;">\n      <ion-label fixed>Telefone</ion-label>\n      <ion-input type="tel" value=""></ion-input>\n    </ion-item>\n\n    <ion-item no-padding style="background-color: #032040;">\n      <ion-label fixed>Senha</ion-label>\n      <ion-input type="password"></ion-input>\n    </ion-item>\n\n    <button ion-button block style="margin-top:15px;border-radius: 18px;background-color:white; color:#032040; margin-top:15px" (click)="register()">Cadastre-se</button>\n  </ion-row>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/register/register.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], RegisterPage);
    return RegisterPage;
}());

//# sourceMappingURL=register.js.map

/***/ }),

/***/ 106:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SobrePage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the SobrePage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var SobrePage = /** @class */ (function () {
    function SobrePage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    SobrePage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad SobrePage');
    };
    SobrePage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-sobre',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/sobre/sobre.html"*/'\n<ion-header>\n    <header-custom></header-custom>\n</ion-header>\n\n\n<ion-content padding>\n  <p> <b>PayBoi</b> conecta o frigorífico ao produtor.</p>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/sobre/sobre.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], SobrePage);
    return SobrePage;
}());

//# sourceMappingURL=sobre.js.map

/***/ }),

/***/ 107:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return VeterinariosPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the VeterinariosPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var VeterinariosPage = /** @class */ (function () {
    function VeterinariosPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    VeterinariosPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad VeterinariosPage');
    };
    VeterinariosPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-veterinarios',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/veterinarios/veterinarios.html"*/'\n<ion-header>\n    <header-custom></header-custom>\n\n</ion-header>\n\n\n<ion-content padding>\n    <ion-row>\n        <ion-col style="margin-top:15px">\n          <h3> Veterinários </h3>\n        </ion-col>\n      </ion-row>\n      <ion-row>\n        <ion-list style="width: 100%;">\n          <div >\n            <ion-item >\n              <ion-avatar item-start>\n                <img src="../../assets/imgs/user.jpg">\n              </ion-avatar>\n              <ion-row>\n                <ion-col>\n                  <h2>Fazenda Slavieiro </h2>\n                  <h3>05/02/2019</h3>\n                  <p>Cascavel-Pr</p>\n                </ion-col>\n              </ion-row>\n            </ion-item>\n            <ion-item >\n                <ion-avatar item-start>\n                  <img src="../../assets/imgs/laura.jpg">\n                </ion-avatar>\n                <ion-row>\n                  <ion-col>\n                    <h2>Laura Silva</h2>\n                    <h3>05/02/2019</h3>\n                    <p>Cascavel-Pr</p>\n                  </ion-col>\n                </ion-row>\n              </ion-item>\n          </div>\n        </ion-list>\n      </ion-row>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/veterinarios/veterinarios.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], VeterinariosPage);
    return VeterinariosPage;
}());

//# sourceMappingURL=veterinarios.js.map

/***/ }),

/***/ 117:
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncatched exception popping up in devtools
	return Promise.resolve().then(function() {
		throw new Error("Cannot find module '" + req + "'.");
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = 117;

/***/ }),

/***/ 158:
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"../pages/cad-vaca/cad-vaca.module": [
		281,
		10
	],
	"../pages/chat/chat.module": [
		282,
		9
	],
	"../pages/contato/contato.module": [
		283,
		8
	],
	"../pages/empresas/empresas.module": [
		284,
		7
	],
	"../pages/login/login.module": [
		285,
		6
	],
	"../pages/pre-venda/pre-venda.module": [
		286,
		5
	],
	"../pages/register/register.module": [
		287,
		4
	],
	"../pages/sobre/sobre.module": [
		288,
		3
	],
	"../pages/success/success.module": [
		290,
		2
	],
	"../pages/veterinarios/veterinarios.module": [
		289,
		1
	],
	"../pages/view-rebanho/view-rebanho.module": [
		291,
		0
	]
};
function webpackAsyncContext(req) {
	var ids = map[req];
	if(!ids)
		return Promise.reject(new Error("Cannot find module '" + req + "'."));
	return __webpack_require__.e(ids[1]).then(function() {
		return __webpack_require__(ids[0]);
	});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
	return Object.keys(map);
};
webpackAsyncContext.id = 158;
module.exports = webpackAsyncContext;

/***/ }),

/***/ 202:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return CadVacaPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the CadVacaPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var CadVacaPage = /** @class */ (function () {
    function CadVacaPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    CadVacaPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad CadVacaPage');
    };
    CadVacaPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-cad-vaca',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/cad-vaca/cad-vaca.html"*/'<!--\n  Generated template for the CadVacaPage page.\n\n  See http://ionicframework.com/docs/components/#navigation for more info on\n  Ionic pages and navigation.\n-->\n<ion-header>\n\n  <ion-navbar>\n    <ion-title>cadVaca</ion-title>\n  </ion-navbar>\n\n</ion-header>\n\n\n<ion-content padding>\n  <ion-row>\n    <ion-col text-center>\n        <h2 style="color:464646">Cadastro</h2>\n    </ion-col>\n  </ion-row>\n  <ion-item style="padding: 8px 0">\n\n  <ion-label>Selecione a raça</ion-label>\n  <ion-select >\n    <ion-option value=""> Aberdeen-angus </ion-option>\n    <ion-option value=""> Brandus </ion-option>\n    <ion-option value=""> Nelore </ion-option>\n    <ion-option value=""> Tabapuã</ion-option>\n    <ion-option value=""> Outros </ion-option>\n  </ion-select>\n</ion-item>\n\n  <ion-item style="padding: 16px 0">\n    <ion-label floating >Quantidade de Fêmeas </ion-label>\n    <ion-input type="text" value=""></ion-input>\n  </ion-item>\n\n  <ion-item style="padding: 16px 0">\n    <ion-label floating >Quantidades de machos</ion-label>\n    <ion-input type="text"></ion-input>\n  </ion-item>\n\n  <ion-item style="padding: 16px 0">\n    <ion-label floating >Idade</ion-label>\n    <ion-input type="text"></ion-input>\n  </ion-item>\n\n  <ion-item style="padding: 16px 0">\n    <ion-label floating >Peso</ion-label>\n    <ion-input type="text"></ion-input>\n  </ion-item>\n\n  <ion-item style="padding: 8px 0">\n    <ion-label floating >Dias de cocho</ion-label>\n    <ion-input type="text"></ion-input>\n  </ion-item>\n\n  <ion-row>\n    <ion-col>\n      \n    </ion-col>\n  </ion-row>\n\n  <button ion-button block style="border-radius:16px;background-color: #00C464;">Salvar</button>\n\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/cad-vaca/cad-vaca.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], CadVacaPage);
    return CadVacaPage;
}());

//# sourceMappingURL=cad-vaca.js.map

/***/ }),

/***/ 203:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SuccessPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the SuccessPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var SuccessPage = /** @class */ (function () {
    function SuccessPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    SuccessPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad SuccessPage');
    };
    SuccessPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-success',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/success/success.html"*/'\n<ion-header>\n  <header-custom></header-custom>\n</ion-header>\n\n<ion-content padding>\n  <img src="../../assets/imgs/star.png" alt="" style="width:100%;padding: 30px">\n  <h2>Sucesso!</h2>\n  <p>Fale agora com Jonas Slaviero para fechar negócio</p>\n\n\n  <button icon-start ion-button block style="border-radius:16px;background-color: #00C464;"> <ion-icon name="call"></ion-icon> Ligar Agora</button>\n\n\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/success/success.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], SuccessPage);
    return SuccessPage;
}());

//# sourceMappingURL=success.js.map

/***/ }),

/***/ 204:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ViewRebanhoPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the ViewRebanhoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var ViewRebanhoPage = /** @class */ (function () {
    function ViewRebanhoPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
    }
    ViewRebanhoPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad ViewRebanhoPage');
    };
    ViewRebanhoPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-view-rebanho',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/view-rebanho/view-rebanho.html"*/'\n<ion-header>\n    <header-custom></header-custom>\n</ion-header>\n\n\n<ion-content no-padding>\n    <ion-row>\n        <ion-list style="width: 100%;margin:0">\n          <div>\n            <ion-item >\n              \n              <ion-avatar item-start>\n                  <img src="../../assets/imgs/logo_login.png">\n              </ion-avatar>\n              <ion-row>\n                <ion-col>\n                  <h2>Fazenda Slavieiro </h2>\n                  <h3>05/02/2019</h3>\n                  <p>Cascavel-Pr</p>\n                </ion-col>\n                <ion-col text-right>\n                  <small>\n                    100 fêmeas <br>\n                    80 machos\n                  </small>\n    \n                </ion-col>\n              </ion-row>\n    \n            </ion-item>\n    \n          </div>\n    \n    \n        </ion-list>\n    \n      </ion-row>\n      <ion-row class="mod-2" padding>\n        <h3>Boi Angus 550Kg</h3>\n        <h4>55 dias de cocho - idade 2 anos</h4>\n        <img src="../../assets/imgs/boi.png" alt="" style="width:100%">\n      </ion-row>\n      <ion-row>\n          <ion-list style="width: 100%; margin:0">\n              <div  >\n                <ion-item >\n                  \n                  <ion-avatar item-start>\n                      <img src="../../assets/imgs/user.jpg">\n                  </ion-avatar>\n                  <ion-row>\n                    <ion-col>\n                      <h2>Gustavo</h2>\n                      <p>Veterinário - válido até Nov. 2019</p>\n                    </ion-col>\n                  </ion-row>\n        \n                </ion-item>\n        \n              </div>\n        \n        \n            </ion-list>\n        \n      </ion-row>\n      <ion-row class="mod-2" padding >\n        Fiscalização e Fazenda\n        <button ion-button block color="primary" style="margin-top:15px;border-radius: 18px; margin-top:15px">Fazer Pré Compra</button>\n      </ion-row>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/view-rebanho/view-rebanho.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], ViewRebanhoPage);
    return ViewRebanhoPage;
}());

//# sourceMappingURL=view-rebanho.js.map

/***/ }),

/***/ 205:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__ = __webpack_require__(206);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__app_module__ = __webpack_require__(228);


Object(__WEBPACK_IMPORTED_MODULE_0__angular_platform_browser_dynamic__["a" /* platformBrowserDynamic */])().bootstrapModule(__WEBPACK_IMPORTED_MODULE_1__app_module__["a" /* AppModule */]);
//# sourceMappingURL=main.js.map

/***/ }),

/***/ 228:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppModule; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__ = __webpack_require__(31);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_ionic_angular__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__app_component__ = __webpack_require__(271);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__pages_home_home__ = __webpack_require__(46);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__pages_list_list__ = __webpack_require__(279);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__ionic_native_status_bar__ = __webpack_require__(198);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__ionic_native_splash_screen__ = __webpack_require__(201);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__pages_register_register__ = __webpack_require__(105);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__pages_login_login__ = __webpack_require__(104);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__pages_cad_vaca_cad_vaca__ = __webpack_require__(202);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__components_header_custom_header_custom__ = __webpack_require__(280);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__pages_view_rebanho_view_rebanho__ = __webpack_require__(204);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__pages_success_success__ = __webpack_require__(203);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__pages_veterinarios_veterinarios__ = __webpack_require__(107);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__pages_empresas_empresas__ = __webpack_require__(103);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__pages_pre_venda_pre_venda__ = __webpack_require__(51);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__pages_chat_chat__ = __webpack_require__(101);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__pages_sobre_sobre__ = __webpack_require__(106);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__pages_contato_contato__ = __webpack_require__(102);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};




















var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1__angular_core__["I" /* NgModule */])({
            declarations: [
                __WEBPACK_IMPORTED_MODULE_3__app_component__["a" /* MyApp */],
                __WEBPACK_IMPORTED_MODULE_4__pages_home_home__["a" /* HomePage */],
                __WEBPACK_IMPORTED_MODULE_8__pages_register_register__["a" /* RegisterPage */],
                __WEBPACK_IMPORTED_MODULE_9__pages_login_login__["a" /* LoginPage */],
                __WEBPACK_IMPORTED_MODULE_10__pages_cad_vaca_cad_vaca__["a" /* CadVacaPage */],
                __WEBPACK_IMPORTED_MODULE_5__pages_list_list__["a" /* ListPage */],
                __WEBPACK_IMPORTED_MODULE_12__pages_view_rebanho_view_rebanho__["a" /* ViewRebanhoPage */],
                __WEBPACK_IMPORTED_MODULE_13__pages_success_success__["a" /* SuccessPage */],
                __WEBPACK_IMPORTED_MODULE_14__pages_veterinarios_veterinarios__["a" /* VeterinariosPage */],
                __WEBPACK_IMPORTED_MODULE_15__pages_empresas_empresas__["a" /* EmpresasPage */],
                __WEBPACK_IMPORTED_MODULE_16__pages_pre_venda_pre_venda__["a" /* PreVendaPage */],
                __WEBPACK_IMPORTED_MODULE_17__pages_chat_chat__["a" /* ChatPage */],
                __WEBPACK_IMPORTED_MODULE_19__pages_contato_contato__["a" /* ContatoPage */],
                __WEBPACK_IMPORTED_MODULE_18__pages_sobre_sobre__["a" /* SobrePage */],
                __WEBPACK_IMPORTED_MODULE_11__components_header_custom_header_custom__["a" /* HeaderCustomComponent */]
            ],
            imports: [
                __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__["a" /* BrowserModule */],
                __WEBPACK_IMPORTED_MODULE_2_ionic_angular__["c" /* IonicModule */].forRoot(__WEBPACK_IMPORTED_MODULE_3__app_component__["a" /* MyApp */], {}, {
                    links: [
                        { loadChildren: '../pages/cad-vaca/cad-vaca.module#CadVacaPageModule', name: 'CadVacaPage', segment: 'cad-vaca', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/chat/chat.module#ChatPageModule', name: 'ChatPage', segment: 'chat', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/contato/contato.module#ContatoPageModule', name: 'ContatoPage', segment: 'contato', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/empresas/empresas.module#EmpresasPageModule', name: 'EmpresasPage', segment: 'empresas', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/login/login.module#LoginPageModule', name: 'LoginPage', segment: 'login', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/pre-venda/pre-venda.module#PreVendaPageModule', name: 'PreVendaPage', segment: 'pre-venda', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/register/register.module#RegisterPageModule', name: 'RegisterPage', segment: 'register', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/sobre/sobre.module#SobrePageModule', name: 'SobrePage', segment: 'sobre', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/veterinarios/veterinarios.module#VeterinariosPageModule', name: 'VeterinariosPage', segment: 'veterinarios', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/success/success.module#SuccessPageModule', name: 'SuccessPage', segment: 'success', priority: 'low', defaultHistory: [] },
                        { loadChildren: '../pages/view-rebanho/view-rebanho.module#ViewRebanhoPageModule', name: 'ViewRebanhoPage', segment: 'view-rebanho', priority: 'low', defaultHistory: [] }
                    ]
                }),
            ],
            bootstrap: [__WEBPACK_IMPORTED_MODULE_2_ionic_angular__["a" /* IonicApp */]],
            entryComponents: [
                __WEBPACK_IMPORTED_MODULE_3__app_component__["a" /* MyApp */],
                __WEBPACK_IMPORTED_MODULE_4__pages_home_home__["a" /* HomePage */],
                __WEBPACK_IMPORTED_MODULE_8__pages_register_register__["a" /* RegisterPage */],
                __WEBPACK_IMPORTED_MODULE_9__pages_login_login__["a" /* LoginPage */],
                __WEBPACK_IMPORTED_MODULE_10__pages_cad_vaca_cad_vaca__["a" /* CadVacaPage */],
                __WEBPACK_IMPORTED_MODULE_12__pages_view_rebanho_view_rebanho__["a" /* ViewRebanhoPage */],
                __WEBPACK_IMPORTED_MODULE_13__pages_success_success__["a" /* SuccessPage */],
                __WEBPACK_IMPORTED_MODULE_14__pages_veterinarios_veterinarios__["a" /* VeterinariosPage */],
                __WEBPACK_IMPORTED_MODULE_15__pages_empresas_empresas__["a" /* EmpresasPage */],
                __WEBPACK_IMPORTED_MODULE_16__pages_pre_venda_pre_venda__["a" /* PreVendaPage */],
                __WEBPACK_IMPORTED_MODULE_17__pages_chat_chat__["a" /* ChatPage */],
                __WEBPACK_IMPORTED_MODULE_19__pages_contato_contato__["a" /* ContatoPage */],
                __WEBPACK_IMPORTED_MODULE_18__pages_sobre_sobre__["a" /* SobrePage */],
                __WEBPACK_IMPORTED_MODULE_5__pages_list_list__["a" /* ListPage */]
            ],
            providers: [
                __WEBPACK_IMPORTED_MODULE_6__ionic_native_status_bar__["a" /* StatusBar */],
                __WEBPACK_IMPORTED_MODULE_7__ionic_native_splash_screen__["a" /* SplashScreen */],
                { provide: __WEBPACK_IMPORTED_MODULE_1__angular_core__["u" /* ErrorHandler */], useClass: __WEBPACK_IMPORTED_MODULE_2_ionic_angular__["b" /* IonicErrorHandler */] }
            ]
        })
    ], AppModule);
    return AppModule;
}());

//# sourceMappingURL=app.module.js.map

/***/ }),

/***/ 271:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MyApp; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__ionic_native_status_bar__ = __webpack_require__(198);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__ = __webpack_require__(201);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__pages_home_home__ = __webpack_require__(46);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__pages_login_login__ = __webpack_require__(104);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__pages_veterinarios_veterinarios__ = __webpack_require__(107);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__pages_empresas_empresas__ = __webpack_require__(103);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__pages_pre_venda_pre_venda__ = __webpack_require__(51);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__pages_sobre_sobre__ = __webpack_require__(106);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__pages_contato_contato__ = __webpack_require__(102);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__pages_chat_chat__ = __webpack_require__(101);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};












var MyApp = /** @class */ (function () {
    function MyApp(platform, statusBar, splashScreen) {
        this.platform = platform;
        this.statusBar = statusBar;
        this.splashScreen = splashScreen;
        this.rootPage = __WEBPACK_IMPORTED_MODULE_5__pages_login_login__["a" /* LoginPage */];
        this.initializeApp();
        // used for an example of ngFor and navigation
        this.pages = [
            { title: 'Home', component: __WEBPACK_IMPORTED_MODULE_4__pages_home_home__["a" /* HomePage */], section: '1' },
            { title: 'Anuncios', component: __WEBPACK_IMPORTED_MODULE_4__pages_home_home__["a" /* HomePage */], section: '1' },
            { title: 'Minhas Pré vendas', component: __WEBPACK_IMPORTED_MODULE_8__pages_pre_venda_pre_venda__["a" /* PreVendaPage */], section: '1' },
            { title: 'Veterinários Credenciados', component: __WEBPACK_IMPORTED_MODULE_6__pages_veterinarios_veterinarios__["a" /* VeterinariosPage */], section: '1' },
            { title: 'Frigorificos Credenciados', component: __WEBPACK_IMPORTED_MODULE_7__pages_empresas_empresas__["a" /* EmpresasPage */], section: '1' },
            { title: 'Sobre', component: __WEBPACK_IMPORTED_MODULE_9__pages_sobre_sobre__["a" /* SobrePage */], section: '2' },
            { title: 'Contato', component: __WEBPACK_IMPORTED_MODULE_10__pages_contato_contato__["a" /* ContatoPage */], section: '2' },
            { title: 'Chat', component: __WEBPACK_IMPORTED_MODULE_11__pages_chat_chat__["a" /* ChatPage */], section: '2' },
        ];
    }
    MyApp.prototype.initializeApp = function () {
        var _this = this;
        this.platform.ready().then(function () {
            // Okay, so the platform is ready and our plugins are available.
            // Here you can do any higher level native things you might need.
            _this.statusBar.styleDefault();
            _this.splashScreen.hide();
        });
    };
    MyApp.prototype.openPage = function (page) {
        // Reset the content nav to have just this page
        // we wouldn't want the back button to show in this scenario
        this.nav.setRoot(page.component);
    };
    MyApp.prototype.logout = function () {
        this.nav.setRoot(__WEBPACK_IMPORTED_MODULE_5__pages_login_login__["a" /* LoginPage */]);
    };
    __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["_8" /* ViewChild */])(__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* Nav */]),
        __metadata("design:type", __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["e" /* Nav */])
    ], MyApp.prototype, "nav", void 0);
    MyApp = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/app/app.html"*/'<ion-menu [content]="content" id="menu-material">\n\n\n    <ion-content style="background: #282428">\n      <div class="menu-header">\n        <!-- <img [src]="auth.url_site + pic" *ngIf="pic != \'\'" menuToggle (click)="goToEditarPerfil(user?.id)"  /> -->\n        <img class="user-avatar round" src="../../assets/imgs/fazenda2.jpg" >\n        <p class="name">Fazenda Slaviero</p>\n      </div>\n      <p class="p-side-menu" >\n        encontre\n      </p>\n      <ion-list >\n        <div *ngFor="let p of pages" (click)="openPage(p)">\n          <button menuClose ion-item *ngIf="p.section == \'1\'">\n            <ion-icon  class="icon-circle alinha_icon" name="md-radio-button-off"></ion-icon>\n            {{p.title}}\n          </button>\n        </div>\n      </ion-list>\n  \n      <p class="p-side-menu" >\n        Fale conosco\n      </p>\n      <ion-list>\n        <div *ngFor="let p of pages" (click)="openPage(p)">\n          <button menuClose ion-item *ngIf="p.section == \'2\'">\n            <ion-icon class="icon-circle alinha_icon" name="md-radio-button-off"></ion-icon>\n            {{p.title}}\n          </button>\n        </div>\n<!--   \n        <button menuClose ion-item (click)="openWebPage(\'https://www.instagram.com/neoalibrasil/?hl=pt\')">\n            <ion-icon name="logo-instagram" class="alinha_icon" style="font-size: 24px"></ion-icon> \n            <div style="padding-top: 6px">Instagram </div>\n        </button> -->\n        <button menuClose ion-item (click)="logout()">\n            <ion-icon name="close-circle-outline" class="alinha_icon" style="font-size: 24px"></ion-icon> \n            <div style="padding-top: 6px">SAIR</div>\n        </button>\n      </ion-list>\n    </ion-content>\n    <ion-footer>\n        <div class="versaoApp">\n            Versão: 1.0.0\n          </div>\n    </ion-footer>\n  \n  </ion-menu>\n  \n  <!-- Disable swipe-to-go-back because it\'s poor UX to combine STGB with side menus -->\n  <ion-nav [root]="rootPage" #content swipeBackEnabled="false"></ion-nav>'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/app/app.html"*/
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["h" /* Platform */], __WEBPACK_IMPORTED_MODULE_2__ionic_native_status_bar__["a" /* StatusBar */], __WEBPACK_IMPORTED_MODULE_3__ionic_native_splash_screen__["a" /* SplashScreen */]])
    ], MyApp);
    return MyApp;
}());

//# sourceMappingURL=app.component.js.map

/***/ }),

/***/ 279:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ListPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ListPage = /** @class */ (function () {
    function ListPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        // If we navigated to this page, we will have an item available as a nav param
        this.selectedItem = navParams.get('item');
        // Let's populate this page with some filler content for funzies
        this.icons = ['flask', 'wifi', 'beer', 'football', 'basketball', 'paper-plane',
            'american-football', 'boat', 'bluetooth', 'build'];
        this.items = [];
        for (var i = 1; i < 11; i++) {
            this.items.push({
                title: 'Item ' + i,
                note: 'This is item #' + i,
                icon: this.icons[Math.floor(Math.random() * this.icons.length)]
            });
        }
    }
    ListPage_1 = ListPage;
    ListPage.prototype.itemTapped = function (event, item) {
        // That's right, we're pushing to ourselves!
        this.navCtrl.push(ListPage_1, {
            item: item
        });
    };
    ListPage = ListPage_1 = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-list',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/list/list.html"*/'<ion-header>\n  <ion-navbar>\n    <button ion-button menuToggle>\n      <ion-icon name="menu"></ion-icon>\n    </button>\n    <ion-title>List</ion-title>\n  </ion-navbar>\n</ion-header>\n\n<ion-content>\n  <ion-list>\n    <button ion-item *ngFor="let item of items" (click)="itemTapped($event, item)">\n      <ion-icon [name]="item.icon" item-start></ion-icon>\n      {{item.title}}\n      <div class="item-note" item-end>\n        {{item.note}}\n      </div>\n    </button>\n  </ion-list>\n  <div *ngIf="selectedItem" padding>\n    You navigated here from <b>{{selectedItem.title}}</b>\n  </div>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/list/list.html"*/
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], ListPage);
    return ListPage;
    var ListPage_1;
}());

//# sourceMappingURL=list.js.map

/***/ }),

/***/ 280:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return HeaderCustomComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

/**
 * Generated class for the HeaderCustomComponent component.
 *
 * See https://angular.io/api/core/Component for more info on Angular
 * Components.
 */
var HeaderCustomComponent = /** @class */ (function () {
    function HeaderCustomComponent() {
        console.log('Hello HeaderCustomComponent Component');
        this.text = 'Hello World';
    }
    HeaderCustomComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'header-custom',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/components/header-custom/header-custom.html"*/'<!-- Generated template for the HeaderCustomComponent component -->\n<div>\n    <ion-navbar style="background-image:url(\'../../assets/imgs/logo_login.png\');">\n        <button ion-button menuToggle>\n          <ion-icon name="menu"></ion-icon>\n        </button>\n      </ion-navbar>\n</div>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/components/header-custom/header-custom.html"*/
        }),
        __metadata("design:paramtypes", [])
    ], HeaderCustomComponent);
    return HeaderCustomComponent;
}());

//# sourceMappingURL=header-custom.js.map

/***/ }),

/***/ 46:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return HomePage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__view_rebanho_view_rebanho__ = __webpack_require__(204);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var HomePage = /** @class */ (function () {
    function HomePage(navCtrl) {
        this.navCtrl = navCtrl;
        this.data = [{ id: 0 }, { id: 1 }, { id: 2 }, { id: 3 }, { id: 4 }, { id: 5 }];
    }
    HomePage.prototype.viewOrder = function () {
        this.navCtrl.push(__WEBPACK_IMPORTED_MODULE_2__view_rebanho_view_rebanho__["a" /* ViewRebanhoPage */]);
    };
    HomePage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-home',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/home/home.html"*/'<ion-header>\n <header-custom></header-custom>\n</ion-header>\n\n<ion-content no-padding text-center>\n  <ion-row style="font-size: 18px;margin-top:15px">\n    <ion-col col-3 text-right>\n      <ion-icon name="ios-arrow-back-outline"></ion-icon>\n    </ion-col>\n    <ion-col col-6 text-center>15 dias</ion-col>\n    <ion-col col-3 text-left>\n      <ion-icon name="ios-arrow-forward-outline"></ion-icon>\n    </ion-col>\n  </ion-row>\n  <ion-row>\n    <ion-col style="margin-top:15px">\n      <h3> Produtores </h3>\n    </ion-col>\n  </ion-row>\n  <ion-row>\n    <ion-list style="width: 100%;">\n      <div  *ngFor="let item of data; let i = index">\n        <ion-item padding [ngClass]="{\'mod-2\':i%2 === 0}" style="padding: 0 16px;" (click)="viewOrder()">\n          \n          <ion-avatar item-start>\n            <img src="../../assets/imgs/logo_login.png">\n          </ion-avatar>\n          <ion-row>\n            <ion-col>\n              <h2>Fazenda Slavieiro </h2>\n              <h3>05/02/2019</h3>\n              <p>Cascavel-Pr</p>\n            </ion-col>\n            <ion-col text-right>\n              <small>\n                100 fêmeas <br>\n                80 machos\n              </small>\n            </ion-col>\n          </ion-row>\n        </ion-item>\n      </div>\n    </ion-list>\n\n  </ion-row>\n</ion-content>\n'/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/home/home.html"*/
        }),
        __metadata("design:paramtypes", [typeof (_a = typeof __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */] !== "undefined" && __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */]) === "function" && _a || Object])
    ], HomePage);
    return HomePage;
    var _a;
}());

//# sourceMappingURL=home.js.map

/***/ }),

/***/ 51:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return PreVendaPage; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_ionic_angular__ = __webpack_require__(10);
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


/**
 * Generated class for the PreVendaPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */
var PreVendaPage = /** @class */ (function () {
    function PreVendaPage(navCtrl, navParams) {
        this.navCtrl = navCtrl;
        this.navParams = navParams;
        this.isPendente = true;
        this.data = [{ id: 0 }, { id: 1 }, { id: 2 }, { id: 3 }, { id: 4 }, { id: 5 }];
    }
    PreVendaPage.prototype.ionViewDidLoad = function () {
        console.log('ionViewDidLoad PreVendaPage');
    };
    PreVendaPage.prototype.togglePendente = function () {
        if (this.isPendente) {
            this.isPendente = false;
        }
        else {
            this.isPendente = true;
        }
    };
    PreVendaPage = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["m" /* Component */])({
            selector: 'page-pre-venda',template:/*ion-inline-start:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/pre-venda/pre-venda.html"*/'\n<ion-header>\n    <header-custom></header-custom>\n</ion-header>\n\n\n<ion-content no-padding text-center>\n  <ion-row padding>\n    <ion-col text-center (click)="togglePendente()"><h4 [ngClass]="{\'border-green\': isPendente}">Pendentes</h4></ion-col>\n    <ion-col text-center (click)="togglePendente()"><h4 [ngClass]="{\'border-green\': !(isPendente)}">Fechadas</h4></ion-col>\n  </ion-row>\n    <ion-row>\n      <ion-col >\n        <h4> Minhas pré vendas </h4>\n      </ion-col>\n    </ion-row>\n    <ion-row>\n      <ion-list style="width: 100%;">\n        <div  *ngFor="let item of data; let i = index">\n          <ion-item padding [ngClass]="{\'mod-2\':i%2 === 0}" style="padding: 0 16px;">\n            \n            <ion-avatar item-start>\n              <img src="../../assets/imgs/logo_login.png">\n            </ion-avatar>\n            <ion-row>\n              <ion-col>\n                <h2>Fazenda Slavieiro </h2>\n                <h3>05/02/2019</h3>\n                <p>Cascavel-Pr</p>\n              </ion-col>\n              <ion-col text-right>\n                <small>\n                  100 fêmeas <br>\n                  80 machos\n                </small>\n  \n              </ion-col>\n            </ion-row>\n  \n          </ion-item>\n  \n        </div>\n  \n  \n      </ion-list>\n  \n    </ion-row>\n  </ion-content>\n  '/*ion-inline-end:"/Applications/MAMP/htdocs/bitbucket/geolocation_git_hub/testserver/payboi/ionic/payboi/src/pages/pre-venda/pre-venda.html"*/,
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1_ionic_angular__["f" /* NavController */], __WEBPACK_IMPORTED_MODULE_1_ionic_angular__["g" /* NavParams */]])
    ], PreVendaPage);
    return PreVendaPage;
}());

//# sourceMappingURL=pre-venda.js.map

/***/ })

},[205]);
//# sourceMappingURL=main.js.map