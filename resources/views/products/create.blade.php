
<form method="post" v-on:enctype="multipart/form-data" v-on:submit.prevent="storeProduct()">
<div class="modal fade " id="createProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     data-backdrop="static" data-keyboard="false">

    <div class="modal-dialog modal-xl" role="document">


        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('Registrar Nuevo Producto') }}</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                        Nuevo Producto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                        Compra del producto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false">
                        Options
                    </a>
                </li>
            </ul>

            <div class="modal-body">




                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="link1" aria-expanded="true">






                        <div class="row">
                            <div class="col-md-6">

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Codigo de barras</label>
                                            <input type="text" class="form-control" id="exampleInput2" v-model="newProduct.barcode">

                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Nombre del producto</label>
                                            <input type="text" class="form-control" id="exampleInput2" v-model="newProduct.name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Precio</label>
                                            <input type="text" class="form-control" name="price" id="exampleInput2" v-model="newProduct.price">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <select class="form-control" name="category_id" v-model="newProduct.category_id">
                                                        <option v-for="category in categories" v-bind:value="category.id">@{{ category.name }}</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-just-icon btn-link btn-google" data-toggle="modal" data-target="#createCategory">
                                                    <i class="material-icons">add</i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <select class="form-control" name="brand_id" v-model="newProduct.brand_id">
                                                        <option  v-for="brand in brands" v-bind:value="brand.id">@{{ brand.name }}</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-just-icon btn-link btn-google" data-toggle="modal" data-target="#createBrand">
                                                    <i class="material-icons">add</i>
                                                </button>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Descripcion</label>
                                            <textarea class="form-control" name="description" id="exampleInput2" v-model="newProduct.description" cols="30" rows="8"></textarea>
                                            <span v-for="error in errors">@{{ error }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Stock Minimo</label>
                                            <input type="text" class="form-control" id="exampleInput2" v-model="newProduct.minimum">

                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Stock Maximo</label>
                                            <input type="text" class="form-control" id="exampleInput2" v-model="newProduct.maximum">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
                    <div class="tab-pane" id="link2" aria-expanded="false">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label for="">Fecha de compra</label>
                                    <input type="text"  name="date_purchase" class="form-control" id="datetimepicker4" v-model="newProduct.date_purchase">
                                </div>
                                <div class="form-group ">
                                    <label for="">Fecha de vencimiento</label>
                                    <input type="text"  name="expiration_date" class="form-control" id="datetimepicker3" v-model="newProduct.expiration_date">
                                </div>
                                <div class="form-group ">
                                    <label for="">Cantidad</label>
                                    <input type="text" class="form-control"  v-model="newProduct.stock">
                                </div>
                            </div>


                        </div>
<pre>
    @{{ $data.newProduct }}
</pre>



                    </div>
                    <div class="tab-pane" id="link3" aria-expanded="false">
                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                    </div>
                </div>




            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>

            </div>
        </div>
    </div>
</div>
</form>
