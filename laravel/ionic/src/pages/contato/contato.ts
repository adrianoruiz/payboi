import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, LoadingController, AlertController} from 'ionic-angular';

import { Storage } from "@ionic/storage";
import { AuthProvider } from "../../providers/auth/auth";
import { Http, Response } from "@angular/http";

import { SelecaoObraPage } from "../selecao-obra/selecao-obra";



/**
 * Generated class for the ContatoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-contato',
  templateUrl: 'contato.html',
})
export class ContatoPage {

  contact = {
    name: '',
    email: '',
    text: ''
  }

  constructor(
    public navCtrl: NavController,
     private storage: Storage, 
     private http: Http,
    public auth: AuthProvider, 
    public navParams: NavParams,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController
  ) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ContatoPage');

    this.storage.get('user_dados').then((val) => {
      this.contact = val;
    });
  }

  enviar(){
    return this.http.post(this.auth.urlapi + 'contact/sendMail', this.contact)
      .toPromise()
      .then((response) => {
        console.log(response);
        let user_dados = response.json();
        this.validate(user_dados);
      });
  }

  validate(retorno) {
    console.log('body status', retorno.status);
    if (retorno.status) {
      if (retorno.status == "success") {

        this.success();

      } else {
        this.error(retorno.msg);
      }
    } else {

      this.error(0);
    }
  }

  error(msg) {
    const loading = this.loadingCtrl.create({
      duration: 500
    });

    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: 'Aviso!',
        subTitle: msg,
        buttons: ['Fechar']
      });
      alert.present();
    });

    loading.present();
  }

  success() {
    const loading = this.loadingCtrl.create({
      duration: 500
    });

    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: 'Sucesso!',
        subTitle: 'Mensagem enviada com sucesso!',
        buttons: ['Fechar']
      });
      alert.present();
      this.goToHome();
    });

    loading.present();
  }

  goToHome() {
    this.navCtrl.setRoot(SelecaoObraPage);
  }

}
