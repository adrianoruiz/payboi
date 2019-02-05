import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the PreVendaPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-pre-venda',
  templateUrl: 'pre-venda.html',
})
export class PreVendaPage {
  data: { id: number; }[];
  isPendente: any = true;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    this.data = [{id:0}, {id:1}, {id:2},{id:3}, {id:4}, {id:5}];
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad PreVendaPage');
  }

  togglePendente(){
    if(this.isPendente){
      this.isPendente = false;
    }else{
      this.isPendente = true;
    }
  }

}
