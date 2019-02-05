import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, LoadingController, AlertController  } from 'ionic-angular';
import { Http, Response } from "@angular/http";
import { Storage } from "@ionic/storage";
import { FormProvider } from "../../providers/form/form";


/**
 * Generated class for the AvaliacaoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-avaliacao',
  templateUrl: 'avaliacao.html',
})
export class AvaliacaoPage {

  
  dados_post = {
    'id_user':0,
    'id_question': 0,
    'comment': '',
    'evaluation':0
  };

  constructor(public navCtrl: NavController,
    public form: FormProvider, private storage: Storage, public navParams: NavParams,
    public loadingCtrl: LoadingController, public alertCtrl: AlertController) {
  }

  ionViewDidLoad() {
    this.dados_post.id_question = this.navParams.get('post_id');

    this.storage.get('user_dados').then((val) => {
      this.dados_post.id_user = val.id;

    });
  }

  //  INICIO PARA SALVAR A FOTO
  setAnswer(evaluation) {
  
    this.dados_post.evaluation = evaluation; 
    console.log(this.dados_post);
   
  }


  aviso(val) {
    const loading = this.loadingCtrl.create({
      duration: 500
    });

    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: 'Sucesso!',
        subTitle: val.msg,
        buttons: [
          {
            text: 'Ok',
            role: 'ok',
            handler: () => {
              if (val.status == 'success') {
                console.log('success successsuccesssuccess');
                this.navCtrl.pop();
              }
            }
          }
        ]


      });
      alert.present();
     
    });

    loading.present();
  }



  error(msg) {
    const loading = this.loadingCtrl.create({
      duration: 500
    });

    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: 'Aviso!',
        subTitle: msg,
        buttons: ['Fechar']
      });
      alert.present();
    });
    loading.present();
  }



  sendEvaluation() {
    if (this.dados_post.evaluation>0){
      this.form.envaiarDados(this.dados_post, 'evaluation/setAnswer').then((val) => {
        console.log('Dados sendEvaluation', val);
        this.aviso(val);
        
      });
    } else{
      this.error('Selecione uma das opções acima para fazer sua avaliação');
    }
  }




}
