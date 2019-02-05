import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
import { Storage } from "@ionic/storage";
import { Facebook, FacebookLoginResponse } from '@ionic-native/facebook';
// import { Facebook, FacebookLoginResponse } from "@ionic-native/facebook";


@Injectable()
export class AuthProvider {
  // public urlapi: string = 'https://www.construacontatos.com.br/api/';
  public  urlapi :string = 'http://construacontatos.com.br/api/';
  public url_img: string = 'http://construacontatos.com.br/uploads/';
  public _user_dados = null;

 
  //public fb:Facebook
  constructor(
              public http: Http, 
              private storage: Storage,
              public fb: Facebook
            ) {
              
  }

  getUserDados(): Promise<Object> {

    return new Promise((resove) => {
      if (this._user_dados) {
        resove(this._user_dados);
      }
      this.storage.get('user_dados').then((user_dados) => {
        this._user_dados = user_dados;
        resove(this._user_dados);
      });
    })

  }


  // essa function q vai no laravel e pega os dados do user
  checkMailFacebook(dadosLogin): Promise<Object> {

    return this.http.post(this.urlapi + 'user/loginFacebook', dadosLogin)
      .toPromise()
      .then((response) => {

        let user_dados = response.json();
        console.log('checkMailFacebook response', user_dados);

        if (user_dados.status == 'success') {
          this._user_dados = user_dados;
          this.storage.set('user_dados', this._user_dados.dados);
        }

        return user_dados;
      });
  }



  loginFabook(): Promise<Object> {
    return this.fb.login(['email'])
      .then((response: FacebookLoginResponse) => {
        // console.log(response);
        let retorno = this.checkMailFacebook(response);
        console.log('loginFabook retorno', retorno);
        return retorno;
      });

  }


  logout() {
    // this.storage.clear();
    this.storage.remove('user_dados');
    this.storage.remove('geo');

    return null;
  }

  logar(dadosLogin): Promise<Object> {
    return this.http.post(this.urlapi + 'user/login', dadosLogin)
      .toPromise()
      .then((response) => {
        console.log(response);

        let user_dados = response.json();

        if (user_dados.status == 'success') {
          this._user_dados = user_dados;
          this.storage.set('user_dados', this._user_dados.dados);
       
        } else {
          this._user_dados = user_dados;
        }
        return this._user_dados;

      });
  }




   
  }
