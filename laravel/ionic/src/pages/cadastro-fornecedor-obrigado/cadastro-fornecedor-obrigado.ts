import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { HomePage } from '../home/home';

/**
 * Generated class for the CadastroFornecedorObrigadoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-cadastro-fornecedor-obrigado',
  templateUrl: 'cadastro-fornecedor-obrigado.html',
})
export class CadastroFornecedorObrigadoPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad CadastroFornecedorObrigadoPage');
  }

  goToHome() {
    this.navCtrl.setRoot(HomePage);
  }

}
