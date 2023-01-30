import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-admincrud',
  templateUrl: './admincrud.component.html',
  styleUrls: ['./admincrud.component.scss']
})
export class AdmincrudComponent implements OnInit {
  AdminArray : any[] = [];
  isResultLoaded = false;
  isUpdateFormActive = false;

   appointment_no: Number = 0;
   customer_address: string ="";
   type_of_service: string ="";
   total: Number = 999;
   driver_name: string ="";
   book_date:string ="";
   date_delivered: string="";
   created_at: string="";
   updated_at: string="";

   currentAdminID = "";


  constructor(private http: HttpClient) 
  {
  this.getAllAdmin();
  }

  ngOnInit(): void {
    this.getAllAdmin();
  }
    getAllAdmin()
  {
    this.http.get("http://127.0.0.1:8000/api/admindashboard")
    .subscribe((resultData: any)=>
    {
      this.isResultLoaded = true;
      console.log(resultData);
      this.AdminArray = resultData;
    });
  
  }
}

