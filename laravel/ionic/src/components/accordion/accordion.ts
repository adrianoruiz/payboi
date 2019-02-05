import { Component, Input,OnInit, Renderer } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Http, Response } from "@angular/http";
import 'rxjs/add/operator/map';

import { ProfissionalViewPage } from "../../pages/profissional-view/profissional-view";
import { trigger, state, style, transition, animate } from '@angular/animations'


import { AuthProvider } from "../../providers/auth/auth";
import { ProfissionaisProvider } from "../../providers/profissionais/profissionais";

import { viewClassName } from '@angular/compiler';
import { CardContent } from 'ionic-angular';

import { Storage } from "@ionic/storage";


@Component({
  selector: 'accordion',
  templateUrl: 'accordion.html',
  animations: [
    trigger('panelInOut', [
      transition('void => *', [
        style({ height: 0, opacity: 0} ),
        animate(300)
      ]),
      transition('* => void', [
        animate(300, style({ height: 0, opacity: 0 }))
      ])
    ])
  ]
})


export class AccordionComponent implements OnInit {

  accordionExapanded: any;
  accordionExapanded2: number[] = [];
  
  atividades: any;
  states: any ;
  cities: any ;
  category_id: any ;
  public _user_dados = null;

  data={
    id_city: 0 ,
    id_state: 0
  };
  
  empresas  = [
    { "name": "Empresas"},
    { "name": "Arquitetos" }
    
  ];

  constructor(public renderer: Renderer, public navCtrl: NavController, public navParams: NavParams,
    private http: Http,
    public auth: AuthProvider, 
    private storage: Storage) {
   
  }

  ngOnInit(){
    this.category_id = this.navParams.get('category_id');
    // this.listActivitys(category_id); 
    console.log(this.empresas);
    this.storage.get('user_dados').then((val) =>{
      this.data.id_city = val.id_city;
      this.data.id_state = val.id_state;
      })
      console.log('data user', this.data);
    this.listState();
    this.listCityByState();
    
    
  }


  toggleAcordion(idx){
    // this.accordionExapanded2[0] = true;
    if (!this.accordionExapanded2[idx]) {
      this.accordionExapanded2[idx] = 1;
    } else {
      this.accordionExapanded2[idx] = 0;      
    }
    console.log(this.accordionExapanded2[idx]);  
  }


  goToProfissional(id) {

    this.navCtrl.push(ProfissionalViewPage, {id_user:id});
  }

  listActivitys(cat_id) {
    // public urlapi: string = 'http://localhost:8000/api/';
    let urlapi = this.auth.urlapi + 'activitys/listActivitysByCategory/' + cat_id;
    // alert(urlapi);
    this.http.get(urlapi).map((res: Response) => {
      let body = res.json();
      return body || {};
    }).subscribe(res => {
      if (res.length > 0) {
        console.log('Atividades',res);
        this.atividades = res;
      }
    });
  }

  listState(){
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

  listCityByState(){
    let id = this.data.id_state;
  
      // public urlapi: string = 'http://localhost:8000/api/';
      // let idioma_user = 'pt';
      let urlapi = this.auth.urlapi + 'city/listCityByState/' + id;
      // alert(urlapi)
      this.http.get(urlapi).map((res: Response) => {
        let body = res.json();
        return body || {};
      }).subscribe(res => {
        
        this.cities = res;
        this.listActivitys(this.category_id); 
          
          console.log(this.cities);
        // listar atividade
        //this.listActivitys(this.states.category_id);
          
      });
  
    }

  

}
