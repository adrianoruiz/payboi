import { Component, ViewChild } from '@angular/core';
import { ActionSheetController, Content, Events, MenuController, Nav, Platform} from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

import { HomePage } from '../pages/home/home';
import { IntroPage } from "../pages/intro/intro";

import { SobrePage } from "../pages/sobre/sobre";
import { CadstroEmpresaPage } from "../pages/cadstro-empresa/cadstro-empresa";
import { ContatoPage } from "../pages/contato/contato";


import { LoginPage } from "../pages/login/login";
import { CadastroPage } from "../pages/cadastro/cadastro";

import { Storage } from "@ionic/storage";
import { ListPage } from '../pages/list/list';

@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  // rootPage: any = IntroPage;
  rootPage: any = IntroPage;

  pages: Array<{title: string, component: any}>;

  user: any = {}
  cidade: string = '';
  
  // pic: string = "assets/images/user.png"; 
  pic: string = "http://www.estrelando.com.br/uploads/2017/10/25/deborah-secco-1508939252.jpg"; 
  

  constructor(public platform: Platform, public statusBar: StatusBar, private storage: Storage,
    public actionSheetCtrl: ActionSheetController, public splashScreen: SplashScreen) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      { title: 'HOME', component: HomePage },
      { title: 'SOBRE NÓS', component: SobrePage },
      { title: 'CADASTRE SUA EMPRESA', component: CadstroEmpresaPage },
      { title: 'CONTATO', component: ContatoPage },
      { title: 'SAIR', component: LoginPage }
    ];

  }

  initializeApp() {

    // exibir a intro somente na instalacao do app
    this.storage.get('intro').then((val) => {
      // console.log('intro is', val);
      if (val === null) {
        this.rootPage = IntroPage;
        // this.nav.setRoot(IntroPage);

      } else {
        this.rootPage = LoginPage;
        // this.nav.setRoot(LoginPage);
      }
    });
    
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }

  // adriano functions
  public showActionSheet() {
    let actionSheet = this.actionSheetCtrl.create({
      buttons: [{
        text: 'Tirar Foto',
        handler: () => {  }
      }, {
        text: 'Pegar da Galeria',
        handler: () => {  }
      },
       {
        text: 'Cancelar',
        role: 'cancel'
      }]
    });
    actionSheet.present();
  }
}
