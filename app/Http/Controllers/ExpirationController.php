<?php

namespace App\Http\Controllers;

use App\Expiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpirationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lista todos los datos de fecha de vencimiento
        $espiration=Expiration::get();
        return $espiration;

    }
    public function index_stock($valor){
        //el numero maximo de productos que hay
        $max=DB::table('expirations')->max('product_id');
        $sumar = DB::table('expirations')->where('product_id', $max)->sum('stock');
        return $sumar;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expiration  $expiration
     * @return \Illuminate\Http\Response
     */
    public function show(Expiration $expiration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expiration  $expiration
     * @return \Illuminate\Http\Response
     */
    public function edit(Expiration $expiration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expiration  $expiration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expiration $expiration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expiration  $expiration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expiration $expiration)
    {
        //
    }
}
