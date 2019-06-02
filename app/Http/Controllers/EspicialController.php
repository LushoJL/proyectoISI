<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EspicialController extends Controller
{
   function userRole(){
//       $max=DB::table('expirations')->max('product_id');
//       $price = DB::table('expirations')->where('product_id', $max)->sum('stock');
//return $resul=[
//    'product'=>$max,
//    'stock'=>$price
//];
//       $dato = DB::table('purchases')->where([['date_purchase', '=','2019-05-10'],['product_id', '=',2]])->first();
//dd($dato);
//if ($dato!=null){
//    return "esta null";
//}else{
//    return "falso";
//}
       $compra=Purchase::create([
           'quantity'=>52,
           'date_purchase'=>'2019-05-30',
           'product_id'=>2,
           'user_id'=>auth()->id(),
           'provider_id'=>1,

       ]);
       $dato = DB::table('purchases')->where([['date_purchase', '=','2019-05-30'],['product_id', '=',2]])->first();
dd($dato);
       return;
   }
}
