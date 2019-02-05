import { Component } from '@angular/core';
import { IonicPage, ActionSheetController, NavController, NavParams, Events, LoadingController, AlertController } from 'ionic-angular';
import { AuthProvider } from "../../providers/auth/auth";
import { FormProvider } from "../../providers/form/form";
import { Http, Response } from "@angular/http";
import { Storage } from "@ionic/storage";
import { Camera, CameraOptions } from "@ionic-native/camera";
import { SelectSearchableComponent } from 'ionic-select-searchable';

import { SelecaoObraPage } from "../selecao-obra/selecao-obra";

import { CadastroFornecedorObrigadoPage } from "../cadastro-fornecedor-obrigado/cadastro-fornecedor-obrigado";


/**
 * Generated class for the CadastroFornecedorPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-cadastro-fornecedor',
  templateUrl: 'cadastro-fornecedor.html',
})
export class CadastroFornecedorPage {
  pic: string;
  states: any;
  cities: any;
  citySelected: any;
  stateSelected: any;
  idioma: string;
  image: string;
  imagebin: string;
  dados_post: any;
  userid: any;
  usernew: any;  
  activitys: any ;
  i_professional: boolean = true ;
  i_company: boolean  ;

 
  type_person = [
    {id: 'pj', name: 'Pessoa Jurídica'},
    {id: 'pf', name: 'Pessoa Física'}
  ]

  data = {
    type_person: '',
    activity: '',
    avatar: '',
    cell_phone: '',
    city: '',
    email: '',
    history: '',
    id: '',
    name: '',
    neighborhood: '',
    number: '',
    site: '',
    street: '',
    i_company: false,
    uf: '',
    id_city: '',
    id_state: '', 
    role: '',
    status: ''
  };

  constructor(public navCtrl: NavController,
    public navParams: NavParams,
    private http: Http,
    public auth: AuthProvider,
    public loadingCtrl: LoadingController,
    private storage: Storage,
    public form: FormProvider,
    public events: Events,

    private camera: Camera,
    public actionSheetCtrl: ActionSheetController,
    public alertCtrl: AlertController) {
      
  }


  ionViewDidLoad() {
    console.log('ionViewDidLoad ProfissionalViewPage');
    this.pic = "assets/images/user.png";
    this.storage.get('user_dados').then((val) => {
      this.getUser(val.id);

    });
    this.listActivitys();

  }

  getUser(id) {
    let urlapi = this.auth.urlapi + 'activitys/infoUser/' + id;
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      this.data = res;

      
      this.listState();
      this.listActivitys();  

      this.listCityByState(this.data.id_state);
      
      console.log('getUser', this.data);
      
      // this.data.cell_phone = res.cell_phone;
      console.log(this.data.name);

      // listar atividade
      //this.listActivitys(this.data.category_id);

    });

  }


  //  INICIO PARA SALVAR A FOTO
  gravarFoto() {
    this.dados_post = {
      'user_id': this.userid,
      'user_foto': this.imagebin
    };

    this.form.envaiarDados(this.dados_post, 'users/salvar_logomarca').then((val) => {
      console.log('Dados salvar_foto', val);
    });
  }

  private loadImage(selectedSourceType: number) {
    let cameraOptions: CameraOptions = {
      sourceType: selectedSourceType,
      destinationType: this.camera.DestinationType.DATA_URL,
      quality: 90,
      targetWidth: 420,
      targetHeight: 420,
      encodingType: this.camera.EncodingType.JPEG,
      mediaType: this.camera.MediaType.PICTURE,
      correctOrientation: true,
    }

    this.camera.getPicture(cameraOptions).then((imageData) => {
      if (imageData != null) {
        this.image = 'data:image/jpeg;base64,' + imageData;
        this.imagebin = imageData;

      }
    });
  }

  // adriano functions
  public showActionSheet() {
    let actionSheet = this.actionSheetCtrl.create({
      buttons: [{
        text: 'Tirar Foto',
        handler: () => { this.loadImage(this.camera.PictureSourceType.CAMERA); }
      }, {
        text: 'Pegar da Galeria',
        handler: () => { this.loadImage(this.camera.PictureSourceType.PHOTOLIBRARY); }
      },
      {
        text: 'Cancelar',
        role: 'cancel'
      }]
    });
    actionSheet.present();
  }
  //  FIM

  validate(retorno) {
    console.log('body status', retorno.status);
    if (retorno.status) {
      if (retorno.status == "success") {

        this.storage.get('user_dados').then((val) => {

          // if (this.imagebin) {
          //   this.userid = val.id;
          //   this.gravarFoto();
          // }
          this.relogar(val.id);
        
        });

        this.success();

      } else {
        this.error(retorno.msg);
      }
    } else {

      this.error(0);
    }
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

  relogar(id) {
    let urlapi = this.auth.urlapi + 'users/relogar/' + id + '/797987';
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      // console.log('relogar', res);
      if (res.status == 'success') {
        this.storage.set('user_dados', res.dados);
        this.events.publish('user:reload_login');

      }

    });

  }

  success() { 
    this.navCtrl.push(CadastroFornecedorObrigadoPage);
  }

  iProfessional(){
    this.i_company = false;
    this.i_professional = true;
  }

  iCompany(){
    this.i_company = true;
    this.i_professional = false;
  }
  

  updateProfile() {

    // this.data.type_person = this.data.type_person['id'];
    this.data.role = 'preParceiro',
    this.data.status = '0'
    this.data.i_company = this.i_company;
    console.log(this.data);
    
    
    return this.http.post(this.auth.urlapi + 'users/update', this.data)
      .toPromise()
      .then((response) => {
        console.log(response);
        let user_dados = response.json();
        this.validate(user_dados);
      });
     

  }

  goToHome() {
    this.navCtrl.setRoot(SelecaoObraPage);
  }

  listActivitys(){
    // public urlapi: string = 'http://localhost:8000/api/';
    // let idioma_user = 'pt';
    let urlapi = this.auth.urlapi + 'activitys/listActivitys';
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      
        this.activitys = res; 
        console.log(this.activitys);
    
        
    });

  }

  

  listState() {
    // public urlapi: string = 'http://localhost:8000/api/';
    // let idioma_user = 'pt';
    let urlapi = this.auth.urlapi + 'state/listState';
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {

      this.states = res;
      // console.log(this.states);

      //pegar menu estado e deixa selecionado corretamente
      var elementPos = this.states.map(function (x) { return x.id; }).indexOf(this.data.id_state);
      this.stateSelected = this.states[elementPos];
     
    });

  }



  listCityByState(id) {
    console.log(this.stateSelected);
    if (this.stateSelected != undefined){
      if (this.stateSelected.id > 0) {
        id = this.stateSelected.id;
        console.log('snshsjshj stateSelected',this.stateSelected.id);
      }
    }
    let urlapi = this.auth.urlapi + 'city/listCityByState/' + id;

    console.log(urlapi);
    
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {

      this.cities = res;
     
      //pegar minha atividade corrtamente
      var elementPos = this.cities.map(function (x) { return x.id; }).indexOf(this.data.id_city);
      this.citySelected = this.cities[elementPos];


    });

  }

  
}
