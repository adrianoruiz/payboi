import { Component } from '@angular/core';
import { IonicPage, AlertController, NavController, NavParams, MenuController } from 'ionic-angular';
import { Storage } from "@ionic/storage";
import { HomePage } from '../home/home';
import { SearchPage } from '../search/search';



@IonicPage()
@Component({
  selector: 'page-selecao-obra',
  templateUrl: 'selecao-obra.html',
})
export class SelecaoObraPage {

  constructor(public navCtrl: NavController, public alertCtrl: AlertController,
    public navParams: NavParams, private storage: Storage, public menuCtrl: MenuController) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad SelecaoObraPage');
  }

  goToHomeProjeto(etapa) {
    this.menuCtrl.enable(true);
    let minha_etapa = { 'etapa': etapa, 'idx': 0, 'idCategory': 0 }
    this.storage.set('etapa', minha_etapa);
    this.navCtrl.setRoot(HomePage, { 'etapa': etapa });
  }

  goToHome(etapa) {
    this.menuCtrl.enable(true);
    
    let minha_etapa = { 'etapa': etapa, 'idx': 0, 'idCategory': 0 }
    this.storage.set('etapa', minha_etapa);
    this.navCtrl.setRoot(HomePage, { 'etapa': etapa });
    // this.storage.get('etapa')
    //   .then((val) => {
    //     let etapas = val;
    //     console.log('deveria trazer - ok existe storage user_dados');
    //     if (etapas) {
    //       // se ja existe nao faz nada      
    //     } 
    //     else{
    //       let minha_etapa = { 'etapa': etapa, 'idx': 0, 'idCategory': 0 }
    //       this.storage.set('etapa', minha_etapa);
    //     }
    //   });
   
    this.navCtrl.setRoot(HomePage, { 'etapa': etapa});
  }

  goToPesquisa(termo) {
    this.menuCtrl.enable(true);
    this.navCtrl.setRoot(SearchPage, termo);
  }

  doPequisa() {
     let prompt = this.alertCtrl.create({
      title: '',
      message: "",
      inputs: [
        {
          name: 'termo',
          placeholder: 'Pesquisar...'
        },
      ],
      buttons: [
        {
          text: 'Cancelar',
          cssClass: 'btCancelar',
          handler: data => {
            console.log('Cancel clicked');
          }
        },
        {
          text: 'Buscar',
          cssClass: 'abtsuccess',
          handler: data => {
            console.log('Saved clicked', data);
            this.goToPesquisa(data);
          }
        }
      ],
      cssClass: 'alertCustomCss'
    });
    prompt.present();
  }


}
