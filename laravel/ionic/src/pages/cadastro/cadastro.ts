import { Component } from '@angular/core';
import { IonicPage, ActionSheetController, NavController, NavParams, LoadingController, MenuController, AlertController } from 'ionic-angular';
import { AuthProvider } from "../../providers/auth/auth";
import { FormProvider } from "../../providers/form/form";
import { Http, Response } from "@angular/http";
import { LoginPage } from '../login/login';
import { SelecaoObraPage } from "../selecao-obra/selecao-obra";
import { Storage } from "@ionic/storage";
import { Camera, CameraOptions } from "@ionic-native/camera";
import { SelectSearchableComponent } from 'ionic-select-searchable';




/**
 * Generated class for the CadastroPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-cadastro',
  templateUrl: 'cadastro.html',
})
export class CadastroPage {

  states: any;
  cities: any;
  stateSelected: any;
  activitys: any;
  result: any;
  user_dados: any;


  // isActive = false;
  // isActiveFornecedor = true;
  idioma: string;
  image: string;
  imagebin: string;
  dados_post: any;
  userid: any;
  usernew: any;

  data = {
    role: 'client',
    password: '',
    email: '',
    confirm_password: '',
    terms: false
  };


  passos: string;
  constructor(public navCtrl: NavController,
    public navParams: NavParams,
    public menuCtrl: MenuController,
    private http: Http,
    public auth: AuthProvider,
    public actionSheetCtrl: ActionSheetController,
    public camera: Camera,
    public form: FormProvider,
    public loadingCtrl: LoadingController,
    private storage: Storage,
    public alertCtrl: AlertController) {
    this.menuCtrl.enable(false);
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad CadastroPage');
    this.listState();
    // this.listActivitys();
  }



  //  INICIO PARA SALVAR A FOTO
  gravarFoto() {
    this.dados_post = {
      'user_id': this.userid,
      'user_foto': this.imagebin
    };

    this.form.envaiarDados(this.dados_post, 'users/salvar_foto').then((val) => {
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
      console.log(this.states);
      // listar atividade
      //this.listActivitys(this.states.category_id);

    });

  }

  listCityByState() {
    console.log(this.stateSelected);
    let id = this.stateSelected.id;

    // public urlapi: string = 'http://localhost:8000/api/';
    // let idioma_user = 'pt';
    let urlapi = this.auth.urlapi + 'city/listCityByState/' + id;
    // alert(urlapi)
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {

      this.cities = res;
      console.log(this.cities);
      // listar atividade
      //this.listActivitys(this.states.category_id);

    });

  }


  store() {
    if (this.data.password == this.data.confirm_password) {
      if (this.data.terms) {
        return this.http.post(this.auth.urlapi + 'user/cadastrar_user', this.data)
          .toPromise()
          .then((response) => {
            console.log(response);
            let user_dados = response.json();
            this.validate(user_dados);
          });
      } else {
        this.error('Aceite os termos de uso');
      }

    } else {
      this.error('Senhas são diferentes');
    }
    console.log(this.data);

  }


  validate(retorno) {
    this.auth.logout();
    this.result = retorno;
    console.log('body', this.result._body);
    console.log('body status', retorno.status);
    if (retorno.status) {
      if (retorno.status == "success") {

        this.success();
        this.login();

      } else {
        this.error(retorno.msg);
      }
    } else {

      this.error(0);
    }
  }

  goToHome() {
    this.menuCtrl.enable(true);
    this.navCtrl.setRoot(SelecaoObraPage);
  }

  validateLogin(retorno) {
    this.auth.logout();
    this.user_dados = retorno;
    console.log('Dentro do login', this.user_dados);
    if (this.user_dados) {
      if (this.user_dados.status == 'success') {
        this.storage.set('user_dados', this.user_dados.dados);

        this.storage.get('user_dados').then((val) => {
         
          if (this.imagebin) {
            this.userid = val.id;
            this.gravarFoto();
          }

          this.goToHome();

        });

      } else {
        this.navCtrl.setRoot(LoginPage);
      }
    } else {
      this.navCtrl.setRoot(LoginPage);
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

  success() {
    const loading = this.loadingCtrl.create({
      duration: 500
    });

    loading.onDidDismiss(() => {
      const alert = this.alertCtrl.create({
        title: 'Sucesso!',
        subTitle: 'Usuário cadastrado com sucesso!',
        buttons: ['Fechar']
      });
      alert.present();
    });

    loading.present();
  }

  //   activeButton = function() {
  //     this.isActive = !this.isActive;
  //     this.isActiveFornecedor = !this.isActiveFornecedor;
  //     if(this.isActive){
  //       this.data.role = 'client';
  //     }else{
  //       this.data.role = 'fornecedor';
  //     }
  // }  
  login() {
    this.auth.logar({ email: this.data.email, password: this.data.password })
      .then((response) => {
        this.validateLogin(response);

      })
  }


}
