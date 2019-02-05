import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { CadastroFornecedorPage } from "../cadastro-fornecedor/cadastro-fornecedor";
/**
 * Generated class for the CadstroEmpresaPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-cadstro-empresa',
  templateUrl: 'cadstro-empresa.html',
})
export class CadstroEmpresaPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  criarConta() {
    this.navCtrl.push(CadastroFornecedorPage);
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad CadstroEmpresaPage');
  }

}
