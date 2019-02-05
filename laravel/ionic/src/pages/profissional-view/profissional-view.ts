import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { AuthProvider } from '../../providers/auth/auth';
import { Http, Response } from "@angular/http";

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
  data: any ; 
  src: string;
  default: string = 'assets/no-image.png';


  constructor(public navCtrl: NavController, public navParams: NavParams, 
     private http: Http,
    public auth: AuthProvider) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProfissionalViewPage');
    this.pic = "http://www.estrelando.com.br/uploads/2017/10/25/deborah-secco-1508939252.jpg";
    let id = this.navParams.get('id_user');
    console.log(id);
    this.getUser(id);

  }

  // valita img e atualiza avatar
  updateUrl() {
    this.src = this.default;
    if (this.data.avatar) {
      this.src = this.data.avatar;
    }

  }

  getUser(id){
    let urlapi = this.auth.urlapi + 'activitys/infoUser/' + id;
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      
        this.data = res;
        // update avatar
        this.updateUrl(); 
        console.log(this.data.name);

      // listar atividade
      //this.listActivitys(this.data.category_id);
        
    });

  }

}
