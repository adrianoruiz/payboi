import { Component, ViewChild  } from '@angular/core';
import { NavController, MenuController, NavParams, Events, Slides} from 'ionic-angular';
import { PostPage } from '../post/post';
import { Http, Response } from "@angular/http";
import 'rxjs/add/operator/map';
import { SelecaoObraPage } from '../selecao-obra/selecao-obra';
import { AuthProvider } from "../../providers/auth/auth";
import { ProfissionaisProvider } from "../../providers/profissionais/profissionais";
import { Storage } from "@ionic/storage";
import { ProfissionalViewPage } from "../profissional-view/profissional-view";
import { ProfissionaisPage } from '../profissionais/profissionais';
import { ContatoPage } from '../contato/contato';


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
  idCategory: number = 2;
  idx_etapa: number = 0;
  total_cat = 0;
  atividades : any;

  categoria_atual :any;
  cat_2 = {
    name : '',
    id : 0
  };
 
  name_sessao = 'PROJETO';
  constructor(public navCtrl: NavController,
    private http: Http,
    public navParams: NavParams,
    public events: Events,
    public menuCtrl: MenuController, private storage: Storage,
    public auth: AuthProvider) {
    
  }


  goToSlideDireto(idx, category_id) {
    idx = parseInt(idx)
    category_id = parseInt(category_id)
    console.log('goToSlideDireto', idx, category_id);
    //pegar nome da categoria
    this.getdadosCat(category_id);

    this.idCategory = category_id;
    this.listContent(this.category[idx].id);
    this.idx_etapa = idx;
    this.listActivitys(this.idCategory)

    // setar na session para continuar da onde parou
    let minha_etapa = { 'etapa': this.etapa, 'idx': this.idx_etapa, 'idCategory': this.idCategory }
    
    this.storage.set('etapa', minha_etapa);
    // fim do set

    this.slides.slideTo(idx, 500);
  }


  ionViewDidLoad() {
    
    this.storage.get('etapa').then((val) => {
      this.etapa = val.etapa;
      this.name_sessao = (this.etapa == 1) ? 'PROJETO' : 'EXECUÇÃO';
      this.idx_etapa = val.idx;
      this.idCategory = val.idCategory;
 
      // aqui esta pegando sempre da sessao 2 execução
      this.listCategoryBySection(this.etapa);
    });

    this.events.publish('user:reload_login');

  }


  listActivitys(cat_id) {
    // public urlapi: string = 'http://localhost:8000/api/';
    let urlapi = this.auth.urlapi + 'activitys/listActivitysByCategory/' + cat_id;
    // alert(urlapi);
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
        console.log('Atividades', res);
        this.atividades = res.length;
       
    });
   
  }

  getdadosCat(idCategory){
    //pegar menu estado e deixa selecionado corretamente
    this.categoria_atual = this.category.map(function (x) { return x.id; }).indexOf(idCategory);
    this.categoria_atual = this.category[this.categoria_atual];

    console.log('retorno categoria_atual ', this.categoria_atual);
  }


  goToSlide(idx,tipo,category_id) {
    //pegar nome da categoria
    this.getdadosCat(category_id);

    if (tipo == 'cache') {
      setTimeout(() => {
        this.listContent(this.category[idx].id);
      }, 700);
      
      this.slides.slideTo(idx, 0);
      return false;
    }

    else if (tipo=='next') {
      idx = idx+1;
      setTimeout(() => {
        this.listContent(this.category[idx].id);
      }, 700);
    } 
    else {
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


    this.idCategory = this.category[idx].id;
    this.idx_etapa = idx;
    

    this.listActivitys(this.category[idx].id)

    // setar na session para continuar da onde parou
    let minha_etapa = { 'etapa': this.etapa, 'idx': this.idx_etapa, 'idCategory': this.idCategory }
    this.storage.set('etapa', minha_etapa);


    this.slides.slideTo(idx, 500);

    
  }


  

  goToContato() {
    this.navCtrl.push(ContatoPage);
  }

  goToProfissionais(category_id) {
    this.navCtrl.push(ProfissionaisPage, {
      'category_id': category_id
    });
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
  listCategoryBySection(etapa){
     
    let urlapi = this.auth.urlapi + 'category/listCategoryBySection/' + etapa;

      this.http.get(urlapi).map((res: Response) => {
        let body = res.json();
        return body || {};
      }).subscribe(res => {
        if (res.length > 0) {
          console.log('retorno category ', res);
          this.category = res;
          // this.idCategory = this.category[0].id;
          this.total_cat = this.category;


          // let minha_etapa = { 'etapa': this.etapa, 'idx': this.idx_etapa, 'idCategory': this.idCategory }
         
          if (this.idx_etapa > 0) {
            setTimeout(() => {
              this.goToSlide(this.idx_etapa, 'cache', this.idCategory);
            }, 1200 / 60);
   
          } else{
            // se nao tem cache de etapa

            // pegar nome da Etapa
            this.getdadosCat(res[0].id);
          
            this.cat_2.name = this.category[1].name;
            this.cat_2.id = this.category[1].id;
            this.listActivitys(this.idCategory)
            
            // aqui esta pegando as noticias da categoria 2
            this.listContent(res[0].id);

          }
          

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
  