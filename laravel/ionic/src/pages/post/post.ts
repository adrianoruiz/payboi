import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { SelecaoObraPage } from '../selecao-obra/selecao-obra';
import { HomePage } from '../home/home';
import { ProfissionaisPage } from '../profissionais/profissionais';

import { AuthProvider } from "../../providers/auth/auth";
import { Http, Response } from "@angular/http";
import { Storage } from "@ionic/storage";

import { AvaliacaoPage } from "../avaliacao/avaliacao";



/**
 * Generated class for the PostPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-post',
  templateUrl: 'post.html',
})
export class PostPage {
  data: any ;
  atividades: any;
  etapa: number = 1;
  content_id: any ;
  url_img : any = this.auth.url_img;
  

  constructor(public navCtrl: NavController, private storage: Storage,
     public navParams: NavParams, private http: Http, public auth: AuthProvider) {
  }

  ionViewDidLoad() {
    this.storage.get('etapa').then((val) => {
      this.etapa = val;

    });

    let id = this.navParams.get('id');
    console.log(id);
    this.listPost(id);
    this.setView(id);
    
  }

  setView(id){
    // public urlapi: string = 'http://localhost:8000/api/';
    // let idioma_user = 'pt';
    let urlapi = this.auth.urlapi + 'content/setview/' + id;
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      console.log(res);
    //    this.data = res;

    
        
    });

  }

  avaliar(id){
    this.navCtrl.push(AvaliacaoPage, {'post_id':id});
  }

  goToSelectStage() {
    this.navCtrl.setRoot(SelecaoObraPage);
  }

  goToHome() {
    this.navCtrl.setRoot(HomePage);
  }

  goToProfissionais(category_id) {
   
    this.navCtrl.push(ProfissionaisPage, {
      'category_id': category_id
    });
  }



  listPost(id){
    // public urlapi: string = 'http://localhost:8000/api/';
    // let idioma_user = 'pt';
    let urlapi = this.auth.urlapi + 'content/listContent/' + id;
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      console.log(res);
        this.data = res;

      // listar atividade
      //this.listActivitys(this.data.category_id);
        
    });

  }

}

