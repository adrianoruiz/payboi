import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, MenuController } from 'ionic-angular';
import { Storage } from "@ionic/storage";
import { HomePage } from '../home/home';


/**
 * Generated class for the SelecaoObraPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-selecao-obra',
  templateUrl: 'selecao-obra.html',
})
export class SelecaoObraPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, private storage: Storage, public menuCtrl: MenuController) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad SelecaoObraPage');
  }

  goToHome(etapa) {
    this.menuCtrl.enable(true);
    this.storage.set('etapa', etapa);
    this.navCtrl.setRoot(HomePage, {'etapa': etapa});
  }

}
