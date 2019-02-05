import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, MenuController, AlertController, LoadingController } from 'ionic-angular';
import { CadastroPage } from "../cadastro/cadastro";
import { EsqueceuSenhaPage } from "../esqueceu-senha/esqueceu-senha";
import { SelecaoObraPage} from "../selecao-obra/selecao-obra";
import { AuthProvider } from '../../providers/auth/auth';
import { Storage } from "@ionic/storage";
import * as $ from 'jquery';

// import { HomePage } from '../home/home';

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {

  email: string;
  password: string;
  user_dados: any;

  constructor(public navCtrl: NavController,
    public menuCtrl: MenuController, 
    private auth: AuthProvider,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private storage: Storage,
    public navParams: NavParams) {
    this.menuCtrl.enable(false);
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad LoginPage');
  }

  goToHome() {
    this.menuCtrl.enable(true);
    this.navCtrl.setRoot(SelecaoObraPage);
  }

  atualizarAvatarHome() {
    //@todo deixei aqui mais ainda tenho q mexer nessa funcao
    // this.events.publish('user:login');
  }

  //loginFacebook
  loginFacebook() {
    this.auth.loginFabook().then((response) => {
      this.validate(response);
    });
  }

  validate(retorno) {
    this.auth.logout();
    this.user_dados = retorno;
    console.log('Dentro do login', this.user_dados);
    if (this.user_dados) {
      if (this.user_dados.status == 'success') {
        this.storage.set('user_dados', this.user_dados.dados);

        this.storage.get('user_dados').then((val) => {
          this.atualizarAvatarHome();
          this.goToHome();

        });

      } else {
        this.error();
      }
    } else {
      this.error();
    }
  }


  error() {
    const loading = this.loadingCtrl.create({
      duration: 500
    });

    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: 'Aviso!',
        subTitle: 'Email ou senha incorretos',
        buttons: ['Fechar']
      });
      alert.present();
    });

    loading.present();
  }




  // login normal
  login() {
    this.auth.logar({ email: this.email, password: this.password })
      .then((response) => {
        this.validate(response);

      })
  }

  esqueciSenha() {
    this.navCtrl.push(EsqueceuSenhaPage);
  }

  criarConta() {
    this.navCtrl.push(CadastroPage);
  }

  rolaTeclado() {
    // setTimeout(function(){ 
      $('.logo').animate({
        width: "20%",
        opacity: 0.9
      }, 1500 );
     
      $('.slide-title').hide( 1500 );
    //  }, 500); 
  }
}
