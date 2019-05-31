@extends('layouts.app', ['activePage' => 'products', 'titlePage' => __('Productos')])

@section('content')

    <div class="content" id="usurol">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Productos')}}</h4>
                            <p class="card-category"> {{ __('Aquí puedes gestionar los productos.') }}</p>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="button" class="btn btn-success btn-link"  data-toggle="modal" data-target="#createProduct">
                                        Agregar nuevo Producto
                                        <div class="ripple-container"></div>
                                    </button>

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Descripcion
                                    </th>
                                    <th>
                                        Marca
                                    </th>
                                    <th>
                                        Categoria
                                    </th>
                                    <th>
                                        Precio
                                    </th>
                                    <th>
                                        Stock
                                    </th>
                                    <th class="text-center" colspan="3">
                                        Acciones
                                    </th>

                                    </thead>
                                    <tbody>

                                    <tr v-for="product in products">
                                        <td>
                                            @{{ product.name }}
                                        </td>
                                        <td>
                                            @{{ product.description }}
                                        </td>
                                        <td v-for="brand in brands" v-if="product.brand_id===brand.id">
                                            @{{ brand.name }}
                                        </td>
                                        <td v-for="category in categories" v-if="product.category_id===category.id">
                                            @{{ category.name }}
                                        </td>
                                        <td>
                                            @{{ product.price }}
                                        </td>
                                        <td v-for="expiration in expirations" v-if="expiration.product_id === product.id">
                                            <span>@{{expiration.stock+0}}</span>
                                        </td>

                                        <td class="td-actions text-right">
                                            <button type="button" class="btn btn-success btn-link" v-on:click.prevent="shopingProduct(product)">
                                                <i class="material-icons">shopping_cart</i>
                                                <div class="ripple-container"></div>
                                            </button>

                                        </td>
                                        <td class="td-actions text-right">


                                            <a class="btn btn-info btn-link" href="#" >
                                                <i class="material-icons">remove_red_eye</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </td>
                                        <td class="td-actions text-right">

                                            <button type="button" class="btn btn-danger btn-link" v-on:click.prevent="deleteProduct(product)">
                                                <i class="material-icons">delete</i>
                                                <div class="ripple-container"></div>
                                            </button>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
<pre>
    @{{ $data}}
</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        modal de crear una compra--}}
        @include('purchases.create')
{{--        modal de crear producto--}}
        @include('products.create')
{{--        modal de crear marcas--}}
        @include('brands.create')
{{--        modal de crear categorias--}}
        @include('categories.create')

    </div>

@endsection
