import { Component, ViewChild } from '@angular/core';
import {  ActionSheetController, Content, Events, MenuController, Nav, Platform} from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { HomePage } from '../pages/home/home';

import { IntroPage } from "../pages/intro/intro";
import { SobrePage } from "../pages/sobre/sobre";
import { CadstroEmpresaPage } from "../pages/cadstro-empresa/cadstro-empresa";
import { ContatoPage } from "../pages/contato/contato";
import { LoginPage } from "../pages/login/login";
import { EditarPerfilPage } from "../pages/editar-perfil/editar-perfil";
import { Storage } from "@ionic/storage";

import { AuthProvider } from '../providers/auth/auth';
import { InAppBrowser, InAppBrowserOptions } from '@ionic-native/in-app-browser';
import { SocialSharing } from '@ionic-native/social-sharing';

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
  pic: string = "assets/images/user.png"; 
  

  constructor(public platform: Platform,
  
    public statusBar: StatusBar, 
    private storage: Storage, public menuCtrl: MenuController,
    public auth: AuthProvider,
    public events: Events,
    private inAppBrowser: InAppBrowser,
    private socialSharing: SocialSharing,
    public actionSheetCtrl: ActionSheetController,
     public splashScreen: SplashScreen) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      { title: 'HOME', component: HomePage },
      { title: 'SOBRE NÓS', component: SobrePage },
      { title: 'SEJA PARCEIRO', component: CadstroEmpresaPage },
     
    ];

    events.subscribe('user:reload_login', () => {
      this.bind();
    });

  }

 
  share() {
    const message = 'Gostei do app Construa Contatos baixe você também!';
    const file = '';
    const link = 'https://play.google.com/store/apps/details?id=br.contrua.contato.cliques';
    const subject = 'Construa Contatos';

    this.socialSharing.share(message, subject, file, link)
      .then(() => {

      }).catch(() => {

      });
  }

  goToEditarPerfil() {
    this.nav.setRoot(EditarPerfilPage, {}, { animate: true });
  }


  goToContato() {
    this.nav.push(ContatoPage);
  }
  openWebPage(url: string) {
    const options: InAppBrowserOptions = {
      zoom: 'no'
    }
    const browser = this.inAppBrowser.create(url, '_self', options);
    // browser.on('').subscribe()
  }

  logout() {

    this.auth.logout();
    this.nav.setRoot(LoginPage, {}, { animate: true, direction: 'backward' });

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


    // vericações do app
    this.bind();

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



  bind() {
   
    this.storage.get('user_dados')
      .then((user) => {
        this.user = user;
        console.log('deveria trazer - ok existe storage user_dados');
        if (this.user) {

          if (this.user.dados) {
            this.user = this.user.dados;
          }


          if (this.user.avatar != null) {
            // if (this.user.avatar == 'https://www.menuplanet.com.br/uploads/avatars/user-' + this.user.id+'.jpg') {
            this.pic = this.user.avatar;
            // alert(this.pic);
          }

          //se ja estou logoado vou para home
          this.menuCtrl.enable(true);
          if (this.rootPage.name == 'LoginPage') {
            this.rootPage = HomePage;
          }
       

        } else {
          console.log('NAO existe storage user_dados');
        
          
        }
      })

      .catch(error => {
        // console.log(error)
      })
  }



}
