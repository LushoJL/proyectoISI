<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EspicialController extends Controller
{
   function userRole(){
       $dato = DB::table('purchases')->where('date_purchase', '1998-02-21')->first();

       if ($dato->date_purchase=='1998-02-21' && $dato->product_id=='1'){
           DB::table('purchases')->where('id', 1)->update(['quantity'=>$dato->quantity+10]);
       }else{
           echo "hola";
       }

   }
}
