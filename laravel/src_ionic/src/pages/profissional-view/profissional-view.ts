import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the ProfissionalViewPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-profissional-view',
  templateUrl: 'profissional-view.html',
})
export class ProfissionalViewPage {

  pic: string ; 


  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProfissionalViewPage');
    this.pic = "http://www.estrelando.com.br/uploads/2017/10/25/deborah-secco-1508939252.jpg";;
  }

}
