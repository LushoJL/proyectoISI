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
    //aqui se guarda las compras y el stock con sus fechas de vencimiento

    public function store(Request $request)
    {
        //hacemos la consulta en la tabla de compras para saber si el producto compramos en la misma fecha
        $dato = DB::table('purchases')->where([['date_purchase', '=',$request->date_purchase],['product_id', '=',$request->product_id]])->first();

        //preguntamos si la consulta no encuentra nada
        if ($dato!=null){
            //si el valor no es nulo, actualizamos la tabla cantidad de compra de la tabla compras
            DB::table('purchases')->where('id', $dato->id)->update(['quantity'=>$dato->quantity+$request->quantity]);

        }else{
            //si es null, guardamos la nueva compra

        $compra=Purchase::create([
            'quantity'=>$request->quantity,
            'date_purchase'=>$request->date_purchase,
            'product_id'=>$request->product_id,
            'user_id'=>auth()->id(),
            'provider_id'=>$request->provider_id

        ]);

     }

       // guardamos el stock y su fecha de vencimiento
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
