import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { ProfissionalViewPage } from './profissional-view';

@NgModule({
  declarations: [
    ProfissionalViewPage,
  ],
  imports: [
    IonicPageModule.forChild(ProfissionalViewPage),
  ],
})
export class ProfissionalViewPageModule {}
