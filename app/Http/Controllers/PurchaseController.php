<?php

namespace App\Http\Controllers;

use App\Expiration;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = DB::table('purchases')->where('date_purchase', $request->date_purchase)->first();

        if ($dato->date_purchase==$request->date_purchase && $dato->product_id==$request->product_id){
                DB::table('purchases')->where('id', $dato->id)->update(['quantity'=>$dato->quantity+$request->quantity]);
        }else{
            $compra=Purchase::create([
                'quantity'=>$request->quantity,
                'date_purchase'=>$request->date_purchase,
                'product_id'=>$request->product_id,
                'provider_id'=>$request->provider_id,
                'user_id'=>auth()->id(),
            ]);

        }
        $fecha_vencimiento=Expiration::create([
            'expiration_date'=>$request->expiration_date,
            'stock'=>$request->quantity,
            'product_id'=>$request->product_id,
        ]);
       return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
