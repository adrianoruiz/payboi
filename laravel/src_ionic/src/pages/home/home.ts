import { Component, ViewChild  } from '@angular/core';
import { NavController, MenuController, NavParams, Slides} from 'ionic-angular';
import { PostPage } from '../post/post';
import { Http, Response } from "@angular/http";
import 'rxjs/add/operator/map';
import { SelecaoObraPage } from '../selecao-obra/selecao-obra';
import { AuthProvider } from "../../providers/auth/auth";
import { Storage } from "@ionic/storage";
import { ProfissionalViewPage } from "../profissional-view/profissional-view";

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  @ViewChild(Slides) slides: Slides;

  noticias: any ;
  category: any;
  url_img: string = this.auth.url_img;
  link_img: string = '';
  msgZeroRes:string = '';
  etapa:number = 1;
  
  constructor(public navCtrl: NavController,
    private http: Http,
    public navParams: NavParams,
    public menuCtrl: MenuController, private storage: Storage,
    public auth: AuthProvider) {
    
  }

  ionViewDidLoad() {
   
    this.storage.get('etapa').then((val) => {
      this.etapa = val;
      // aqui esta pegando sempre da sessao 2 execução
      this.listCategoryBySection(this.etapa);
    });
    
  
  }


  goToSlide(idx,tipo,category_id) {

    if (tipo=='next') {
      idx = idx+1;
      setTimeout(() => {
        this.listContent(this.category[idx].id);
      }, 700);
    } else {
      idx = idx - 1;
      if (idx >0) {
        setTimeout(() => {
          this.listContent(this.category[idx].id);
        }, 700);
      } else{
        idx = 0;
        setTimeout(() => {
          this.listContent(this.category[idx].id);
        }, 700);
      }
     
    }
    this.slides.slideTo(idx, 500);

    
    
  }

  goToPost(content_id) {
    this.navCtrl.push(PostPage, {
			'id': content_id
		});
  }

 
  goToSelectStage() {
    this.navCtrl.setRoot(SelecaoObraPage);
  }
 

  // http://construacontatos.com.br/api/category/listCategoryBySection/2
  listCategoryBySection($idCategory){
     
    let urlapi = this.auth.urlapi + 'category/listCategoryBySection/' + $idCategory;

      this.http.get(urlapi).map((res: Response) => {
        let body = res.json();
        return body || {};
      }).subscribe(res => {
        if (res.length > 0) {
          console.log('retorno category ', res);
          this.category = res;
          // aqui esta pegando as noticias da categoria 2
          this.listContent(res[0].id);

        }
      });

    }

  listContent(idCategory){
    // public urlapi: string = 'http://localhost:8000/api/';
    let urlapi = this.auth.urlapi + 'content/listContents/' + idCategory ;
    console.log(urlapi)
   
    this.noticias = [];
    this.link_img = ''; 
    
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      if (res.length > 0) {
        console.log('retorno noticias ',res);
        this.noticias = res;
        this.link_img = this.url_img + 'category/'+ res[0].img_category ;

      } else{
        this.link_img = 'https://camaraaltoaraguaia.mt.gov.br/images/nofoto.png';
        this.msgZeroRes = 'Nenhum registro cadastrado neste categoria';
      } 
    });

  }

}
  