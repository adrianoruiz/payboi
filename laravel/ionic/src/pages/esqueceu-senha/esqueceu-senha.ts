import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController, LoadingController } from 'ionic-angular';
import { AuthProvider } from "../../providers/auth/auth";
import { Http, Response } from "@angular/http";

import { LoginPage } from '../login/login';

import * as $ from 'jquery';

/**
 * Generated class for the EsqueceuSenhaPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-esqueceu-senha',
  templateUrl: 'esqueceu-senha.html',
})
export class EsqueceuSenhaPage {

  dados = {
    email: '',
    token: ''
  };


  textos = {
    'titulo': 'Esqueceu a senha',
    'des1': 'Digite seu e-mail de cadastro,',
    'des2': 'para receber o link de recuperação',
    'enviar': 'ENVIAR',
    'email': 'E-mail',
    'cancelar': 'Cancelar'
  };


  constructor(public navCtrl: NavController, public navParams: NavParams,
    private alertCtrl: AlertController, private loadingCtrl: LoadingController,
    private http: Http, public auth: AuthProvider) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad EsqueceuSenhaPage');
  }


  alerta(title,msg) {
    const loading = this.loadingCtrl.create({
      duration: 500
    });
    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: title,
        subTitle: msg,
        buttons: ['Fechar']
      });
      alert.present();
    });
    loading.present();
  }

  enviarEmail(email){
    this.dados = {
     email: email,
     token: '24Xxi918XY9Kud5pUYpct5T5DB0q8jMLBA2VVa7f'
   };
   this.http.post('https://www.construacontatos.com.br/password/email', this.dados)
     .map((res: Response) => {
       let body = res.json();
       return body || {};
     })
     .subscribe(dados => {
       console.log('retorno recuperaSenha', dados);
      
     });
  
 }
  

  recuperar(email) {
    if (email.length===0){
      return this.alerta('Aviso!', 'O campo e-mail está vazio.');
    }

    let loading = this.loadingCtrl.create({
      content: 'Por favor, aguarde...'
    });

    let urlapi = this.auth.urlapi + 'user/recuperaSenha/' + email;

    this.http.get(urlapi)
      .map((res: Response) => {
        let body = res.json();
        return body || {};
      })
      .subscribe(dados => {
        console.log('retorno recuperaSenha', dados);
        if (dados.status === 'success') {
          this.alerta('Sucesso!', dados.msg);
          this.enviarEmail(email);
          this.navCtrl.push(LoginPage);
        }
        else {
          this.alerta('Aviso!', 'E-mail não encontrado.');
        }

      });

   
  

    loading.present();

    setTimeout(() => {
      loading.dismiss();
    }, 1200);

    
  }

  rolaTeclado() {
      $('.logo').animate({
        width: "20%",
        opacity: 0.9
      }, 1500 );

      $('#mt30').hide();
      $('#m16').css("margin", "8px");
      $('.scroll-content').css("margin-top", "10px");
     
  }

}
