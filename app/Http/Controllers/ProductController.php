<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//muestra la lista de los productos
    public function lista(){
        return view('products.index');
    }

    //calcula el stock de cada producto
    public function stock(){
        //consulta para saber cual es id mas alto del producto
        $max=DB::table('expirations')->max('product_id');

        for ($i=1;$i<=$max;$i++){
            $stock = DB::table('expirations')->where('product_id', $i)->sum('stock');
            $resul[$i]=[
              'produc_id'   =>$i,
              'stock'       =>$stock
            ];
        }
        return $resul;
    }

    //trae todos los datos de la base de datos
    public function index()
    {
      $product=Product::get();
      return $product;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=Product::create($request->all());
        //image

        if ($request->file('photo')){
            $path = Storage::disk('public')->put('image/product',$request->file('photo'));

            $product->fill(['photo'=> asset($path)])->save();

        }
        return view('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return;
    }
}
