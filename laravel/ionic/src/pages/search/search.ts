import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { AuthProvider } from "../../providers/auth/auth";
import { PostPage } from '../post/post';
import { Http, Response } from "@angular/http";
import 'rxjs/add/operator/map';
/**
 * Generated class for the SearchPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-search',
  templateUrl: 'search.html',
})
export class SearchPage {
  myInput: string;
  busca: string = 'materias';
  noticias: any;
  fornecedores: any;

  category: any;
  url_img: string = this.auth.url_img;
  link_img: string = '';
  msgZeroRes: string = '';
  etapa: number = 1;
  idCategory: number;
  idx_etapa: number = 0;
  total_result = 0;
  atividades: any;


  constructor(public navCtrl: NavController, public auth: AuthProvider, private http: Http, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    let termo = this.navParams.get('termo');
    this.myInput = termo;
    this.listContent(termo);
  }

  goToPost(content_id) {
    this.navCtrl.push(PostPage, {
      'id': content_id
    });
  }

  listContent(termo) {
    // public urlapi: string = 'http://localhost:8000/api/';
    let urlapi = this.auth.urlapi + 'content/searchContents/' + termo + '/' + this.busca;
    console.log(urlapi)

    this.noticias = [];
    this.link_img = '';

    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      if (res.length > 0) {
        console.log('retorno noticias ', res);
        this.noticias = res;
        this.fornecedores = res;
        this.total_result = this.noticias[0].total;
        if (this.busca ==='fornecedores'){
          this.total_result = this.fornecedores[0].total;
        }

      } else {
       
        this.msgZeroRes = 'Nenhum registro cadastrado neste categoria';
      }
    });

  }


}
