import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { ListPage } from '../pages/list/list';

import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { RegisterPage } from '../pages/register/register';
import { LoginPage } from '../pages/login/login';
import { CadVacaPage } from '../pages/cad-vaca/cad-vaca';
import { HeaderCustomComponent } from '../components/header-custom/header-custom';
import { ViewRebanhoPage } from '../pages/view-rebanho/view-rebanho';
import { SuccessPage } from '../pages/success/success';
import { VeterinariosPage } from '../pages/veterinarios/veterinarios';
import { EmpresasPage } from '../pages/empresas/empresas';
import { PreVendaPage } from '../pages/pre-venda/pre-venda';
import { ChatPage } from '../pages/chat/chat';
import { SobrePage } from '../pages/sobre/sobre';
import { ContatoPage } from '../pages/contato/contato';

@NgModule({
  declarations: [
    MyApp,
    HomePage,
    RegisterPage,
    LoginPage,
    CadVacaPage,
    ListPage,
    ViewRebanhoPage,
    SuccessPage,
    VeterinariosPage,
    EmpresasPage,
    PreVendaPage,
    ChatPage,
    ContatoPage,
    SobrePage,
    HeaderCustomComponent
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    RegisterPage,
    LoginPage,
    CadVacaPage,
    ViewRebanhoPage,
    SuccessPage,
    VeterinariosPage,
    EmpresasPage,
    PreVendaPage,
    ChatPage,
    ContatoPage,
    SobrePage,
    ListPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
