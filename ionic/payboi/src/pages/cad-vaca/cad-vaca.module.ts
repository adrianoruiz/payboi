import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { CadVacaPage } from './cad-vaca';

@NgModule({
  declarations: [
    CadVacaPage,
  ],
  imports: [
    IonicPageModule.forChild(CadVacaPage),
  ],
})
export class CadVacaPageModule {}
