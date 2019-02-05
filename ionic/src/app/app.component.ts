import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

import { HomePage } from '../pages/home/home';
import { ListPage } from '../pages/list/list';
import { LoginPage } from '../pages/login/login';
import { CadVacaPage } from '../pages/cad-vaca/cad-vaca';
import { RegisterPage } from '../pages/register/register';
import { ViewRebanhoPage } from '../pages/view-rebanho/view-rebanho';
import { SuccessPage } from '../pages/success/success';
import { VeterinariosPage } from '../pages/veterinarios/veterinarios';
import { EmpresasPage } from '../pages/empresas/empresas';
import { PreVendaPage } from '../pages/pre-venda/pre-venda';
import { SobrePage } from '../pages/sobre/sobre';
import { Container } from '@angular/compiler/src/i18n/i18n_ast';
import { ContatoPage } from '../pages/contato/contato';
import { ChatPage } from '../pages/chat/chat';

@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = LoginPage; 

  pages: Array<{ title: string, component: any, section: any }>;

  constructor(public platform: Platform, public statusBar: StatusBar, public splashScreen: SplashScreen) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      { title: 'Home', component: HomePage, section: '1' },
      { title: 'Anuncios', component: HomePage, section: '1'  },
      { title: 'Minhas Pré vendas', component: PreVendaPage, section: '1'  },
      { title: 'Veterinários Credenciados', component: VeterinariosPage, section: '1'  },
      { title: 'Frigorificos Credenciados', component: EmpresasPage, section: '1'  },
      { title: 'Sobre', component: SobrePage , section: '2' },
      { title: 'Contato', component: ContatoPage , section: '2' },
      { title: 'Chat', component: ChatPage , section: '2' },
      // { title: 'Perguntas Sobre o PayBoi', component: ListPage , section: '2' }
    ];

  }

  initializeApp() {
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

  logout(){
    this.nav.setRoot(LoginPage);
  }
}
