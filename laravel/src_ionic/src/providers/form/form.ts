import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
import { AuthProvider } from "../auth/auth";


@Injectable()
export class FormProvider {

  _user_dados: any;

  constructor(public http: Http, public auth: AuthProvider) {
    // console.log('Hello FormProvider Provider');
  }



  pmaiusculaGenarico(event) {
    let convert = event.toLowerCase();

    var frags = convert.split(' ');
    let i = 0;
    for (i = 0; i < frags.length; i++) {
      frags[i] = frags[i].charAt(0).toUpperCase() + frags[i].slice(1);
    }

    return frags.join(' ');
  }

  envaiarDados(dados, urlParam): Promise<String> {
    let urlapi = this.auth.urlapi;
    return this.http.post(urlapi + urlParam, dados)
      .toPromise()
      .then((response) => {

        let user_dados = response.json();
        this._user_dados = user_dados;
        console.log(this._user_dados);

        return this._user_dados;

      });
  }


}
