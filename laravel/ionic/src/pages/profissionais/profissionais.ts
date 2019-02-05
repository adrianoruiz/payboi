import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { CadastroFornecedorPage } from "../cadastro-fornecedor/cadastro-fornecedor";
import { ProfissionalViewPage } from "../profissional-view/profissional-view";

/**
 * Generated class for the ProfissionaisPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-profissionais',
  templateUrl: 'profissionais.html',
})
export class ProfissionaisPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProfissionaisPage');
  }

  criarConta() {
    this.navCtrl.push(CadastroFornecedorPage);
  }

  goToProfissional(id) {
    this.navCtrl.push(ProfissionalViewPage);
  }

}
