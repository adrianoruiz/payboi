import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { IonicStorageModule } from "@ionic/storage";

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { IntroPage } from "../pages/intro/intro";
import { LoginPage } from "../pages/login/login";
import { CadastroPage } from "../pages/cadastro/cadastro";
import { EsqueceuSenhaPage } from "../pages/esqueceu-senha/esqueceu-senha";
import { SelecaoObraPage} from "../pages/selecao-obra/selecao-obra";
import { PostPage } from "../pages/post/post";
import { ListPage } from '../pages/list/list';
import { ProfissionaisPage } from '../pages/profissionais/profissionais';


import { SobrePage } from "../pages/sobre/sobre";
import { CadstroEmpresaPage } from "../pages/cadstro-empresa/cadstro-empresa";
import { ContatoPage } from "../pages/contato/contato";
import { ProfissionalViewPage } from "../pages/profissional-view/profissional-view";


import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';


import { HttpModule } from "@angular/http";
import { BrMaskerModule } from 'brmasker-ionic-3';

// PROVIDER
import { FormProvider } from '../providers/form/form';
import { AuthProvider } from '../providers/auth/auth';


@NgModule({
  declarations: [
    MyApp,
    HomePage,
    ListPage,
    IntroPage, 
    LoginPage, 
    CadastroPage,
    EsqueceuSenhaPage,
    SelecaoObraPage,
    PostPage,
    ProfissionaisPage,
    SobrePage,
    CadstroEmpresaPage,
    ContatoPage,
    ProfissionalViewPage,
    
    
  ],
  imports: [
    BrowserModule,
    HttpModule,
    BrMaskerModule,
    IonicModule.forRoot(MyApp, {
      backButtonText: '',
      iconMode: 'ios',
      scrollPadding: false,
      scrollAssist: true,
      autoFocusAssist: false,
      modalEnter: 'modal-slide-in',
      modalLeave: 'modal-slide-out',
      tabsPlacement: 'bottom',
      pageTransition: 'ios-transition'
    },

    ),
    IonicStorageModule.forRoot({ driverOrder: ['localstorage'] })
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    ListPage,
    IntroPage, 
    LoginPage,
    CadastroPage,
    EsqueceuSenhaPage,
    SelecaoObraPage,
    PostPage,
    ProfissionaisPage,
    SobrePage,
    CadstroEmpresaPage,
    ContatoPage,
    ProfissionalViewPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    FormProvider,
    AuthProvider
  ]
})
export class AppModule {}
