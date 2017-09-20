import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HttpModule } from '@angular/http';

import {HttpClientModule} from '@angular/common/http';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import { ShowDetailsComponent } from './show-details/show-details.component';
import { SwRequestService } from './sw-request.service';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
import {RouterModule, Routes, ActivatedRoute, ParamMap } from '@angular/router';
import { ShowListComponent } from './show-list/show-list.component';
import { HomeComponent } from './home/home.component'
const appRoutes: Routes = [

{ path: 'home/:result', component: ShowListComponent },
{ path: 'home/:swrequestservice.urlEnvoi/:swrequestservice.recupId(resultat["url"])', component: ShowDetailsComponent },
{ path: '',
    redirectTo: 'home/',
    pathMatch: 'full'
  },
];


@NgModule({
  declarations: [
    AppComponent,
    ShowDetailsComponent,
    ShowListComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    HttpModule,
// ActivatedRoute,

    NgbModule.forRoot(),
    RouterModule.forRoot(appRoutes
    //  { enableTracing: true } // <-- debugging purposes only
   ),


  ],
  providers: [SwRequestService],
  bootstrap: [AppComponent]
})
export class AppModule { }
