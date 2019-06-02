<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
class ReporteController extends Controller
{

    public function historyPurchase(){
        return view('purchases.index');
    }
    public function datahistoryPurchase(){
        $compras=Purchase::get();
        return $compras;
    }
}
