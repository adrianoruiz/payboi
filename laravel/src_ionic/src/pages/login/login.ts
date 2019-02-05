import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, MenuController } from 'ionic-angular';
import { CadastroPage } from "../cadastro/cadastro";
import { EsqueceuSenhaPage } from "../esqueceu-senha/esqueceu-senha";
import { SelecaoObraPage} from "../selecao-obra/selecao-obra";

import { HomePage } from '../home/home';
/**
 * Generated class for the LoginPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {

  constructor(public navCtrl: NavController, public menuCtrl: MenuController, 
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


  esqueciSenha() {
    this.navCtrl.push(EsqueceuSenhaPage);
  }

  criarConta() {
    this.navCtrl.push(CadastroPage);
  }

}
