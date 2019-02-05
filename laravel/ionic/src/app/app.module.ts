import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { IonicStorageModule } from "@ionic/storage";

import { InAppBrowser } from '@ionic-native/in-app-browser';
import { SocialSharing } from '@ionic-native/social-sharing';

import { MyApp } from './app.component';
import { AccordionComponent } from "../components/accordion/accordion";
import { HeaderbtComponent } from "../components/headerbt/headerbt";
import { SelectSearchableModule } from 'ionic-select-searchable';

import { Camera } from '@ionic-native/camera';
import { HomePage } from '../pages/home/home';
import { IntroPage } from "../pages/intro/intro";
import { EditarPerfilPage } from "../pages/editar-perfil/editar-perfil";

import { AvaliacaoPage } from "../pages/avaliacao/avaliacao";

import { LoginPage } from "../pages/login/login";
import { CadastroPage } from "../pages/cadastro/cadastro";
import { CadastroFornecedorPage } from "../pages/cadastro-fornecedor/cadastro-fornecedor";
import { CadastroFornecedorObrigadoPage } from "../pages/cadastro-fornecedor-obrigado/cadastro-fornecedor-obrigado";
import { EsqueceuSenhaPage } from "../pages/esqueceu-senha/esqueceu-senha";
import { SelecaoObraPage} from "../pages/selecao-obra/selecao-obra";
import { PostPage } from "../pages/post/post";
import { ListPage } from '../pages/list/list';
import { ProfissionaisPage } from '../pages/profissionais/profissionais';
import { SearchPage } from '../pages/search/search';


import { SobrePage } from "../pages/sobre/sobre";
import { CadstroEmpresaPage } from "../pages/cadstro-empresa/cadstro-empresa";
import { ContatoPage } from "../pages/contato/contato";
import { ProfissionalViewPage } from "../pages/profissional-view/profissional-view";


import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';


import { HttpModule } from "@angular/http";
import { BrMaskerModule } from 'brmasker-ionic-3';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

//Pipe
import { YoutubePipe } from "../pipes/youtube/youtube";
// PROVIDER
import { FormProvider } from '../providers/form/form';
import { AuthProvider } from '../providers/auth/auth';
import { ProfissionaisProvider } from '../providers/profissionais/profissionais';
import { Facebook } from '@ionic-native/facebook';


@NgModule({
  declarations: [
    MyApp,
    YoutubePipe,
    AccordionComponent,
    HeaderbtComponent,
    HomePage,
    ListPage,
    IntroPage, 
    LoginPage, 
    CadastroPage,
    CadastroFornecedorPage,
    EsqueceuSenhaPage,
    SelecaoObraPage,
    PostPage,
    ProfissionaisPage,
    SobrePage,
    CadstroEmpresaPage,
    CadastroFornecedorObrigadoPage,
    ContatoPage,
    ProfissionalViewPage,
    SearchPage,
    EditarPerfilPage,
    AvaliacaoPage
    
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    SelectSearchableModule,
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
    EditarPerfilPage,
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
    CadastroFornecedorPage,
    CadastroFornecedorObrigadoPage,
    ContatoPage,
    ProfissionalViewPage,
    SearchPage,
    AvaliacaoPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    Camera,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    InAppBrowser,
    SocialSharing,
    FormProvider,
    AuthProvider,
    ProfissionaisProvider,
    Facebook
  ]
})
export class AppModule {}
