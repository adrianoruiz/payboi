import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

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


  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad EsqueceuSenhaPage');
  }

}
