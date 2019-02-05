import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

import { SelecaoObraPage } from '../selecao-obra/selecao-obra';
import { HomePage } from '../home/home';
import { ProfissionaisPage } from '../profissionais/profissionais';

import { AuthProvider } from "../../providers/auth/auth";
import { Http, Response } from "@angular/http";


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
  
  content_id: any ;
  url_img : any = this.auth.url_img;
  

  constructor(public navCtrl: NavController, public navParams: NavParams, private http: Http, public auth: AuthProvider) {
  }

  // ionViewDidLoad() {
  //   console.log('ionViewDidLoad PostPage');
  // }

  ionViewDidLoad() {
    let id = this.navParams.get('id');
    console.log(id);
    this.listPost(id);
    
  }

  goToSelectStage() {
    this.navCtrl.setRoot(SelecaoObraPage);
  }

  goToHome() {
    this.navCtrl.setRoot(HomePage);
  }

  goToProfissionais(id) {
    this.navCtrl.push(ProfissionaisPage);
  }


  listActivitys(cat_id) {
    // public urlapi: string = 'http://localhost:8000/api/';
    let idioma_user = 'pt';
    let urlapi = this.auth.urlapi + 'activitys/listActivitysByCategory/' + cat_id;
    // alert(urlapi);
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      if (res.length > 0) {
        console.log(res);
        this.atividades = res;

      }
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
      this.listActivitys(this.data.category_id);
        
    });

  }

}

