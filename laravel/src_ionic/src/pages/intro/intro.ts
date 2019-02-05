import { Component } from '@angular/core';
import { IonicPage, NavController, MenuController, NavParams } from 'ionic-angular';
import { LoginPage } from "../login/login";
import { Storage } from "@ionic/storage";
/**
 * Generated class for the IntroPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-intro',
  templateUrl: 'intro.html',
})
export class IntroPage {

  slides = [
    {
      title: "Descubra",
      description: "A melhor forma de saber mais sobre <br> cada etapa da sua obra",
      image: "assets/images/estrutura/intro-1.jpg",
      aproveite: false,
    },
    {
      // title: "",
      description: "Você está em uma ferramenta digital <br> confiável de informações sobre <br> construção civil. <b>Seja bem vindo!</b>",
      image: "assets/images/estrutura/intro-1.jpg",
      aproveite: false,
    },
    {
      // title: "",
      description: "Você encontrará contatos das melhores empresas e dos profissionais mais competentes.",
      image: "assets/images/estrutura/intro-1.jpg",
      aproveite: true,
    }
  ];

  constructor(public navCtrl: NavController, public menuCtrl: MenuController, 
    public navParams: NavParams, private storage: Storage ) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad IntroPage');

    // desabilitar o menu lateral
    this.menuCtrl.enable(false);
    this.storage.set('intro', 1);

  }

  comecar() {
    this.navCtrl.setRoot(LoginPage);
  }


}
