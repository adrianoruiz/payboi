import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
import { Storage } from "@ionic/storage";
import { SearchPage } from '../../pages/search/search';
import { SelecaoObraPage } from '../../pages/selecao-obra/selecao-obra';

/**
 * Generated class for the HeaderbtComponent component.
 *
 * See https://angular.io/api/core/Component for more info on Angular
 * Components.
 */
@Component({
  selector: 'headerbt',
  templateUrl: 'headerbt.html'
})
export class HeaderbtComponent {

  etapa: number = 1;

  constructor(private storage: Storage, public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController) {
    // atraves do valor da etapa setamos o icone la em cima
    this.storage.get('etapa').then((val) => {
      this.etapa = val.etapa;
    });
  }

  goToSelectStage() {
    this.navCtrl.setRoot(SelecaoObraPage);
  }

  goToPesquisa(termo) {
   
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
