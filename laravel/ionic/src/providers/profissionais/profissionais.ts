import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable()
export class ProfissionaisProvider {

  constructor(public http: HttpClient) {
    console.log('Hello ProfissionaisProvider Provider');
  }

}
