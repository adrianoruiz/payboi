import { Component } from '@angular/core';

/**
 * Generated class for the HeaderCustomComponent component.
 *
 * See https://angular.io/api/core/Component for more info on Angular
 * Components.
 */
@Component({
  selector: 'header-custom',
  templateUrl: 'header-custom.html'
})
export class HeaderCustomComponent {

  text: string;

  constructor() {
    console.log('Hello HeaderCustomComponent Component');
    this.text = 'Hello World';
  }

}
