import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  data: { id: number; }[];

  constructor(public navCtrl: NavController) {
    this.data = [{id:0}, {id:1}, {id:2},{id:3}, {id:4}, {id:5}];
  }
}
