
<form method="POST" enctype="multipart/form-data" action="{{route('product.store')}}">
{{ csrf_field()}}
{{method_field('POST')}}
<div class="modal fade " id="purchases" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                            <input type="text" class="form-control" id="exampleInput2" name="barcode">

                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Nombre del producto</label>
                                            <input type="text" class="form-control" id="exampleInput2" name="name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Precio</label>
                                            <input type="text" class="form-control" name="price" id="exampleInput2">
                                        </div>

                                        {{--                                        lista de categorias--}}
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <select class="form-control" name="category_id" >
                                                        <option value="" disabled selected>Eliga la categoria</option>
                                                        <option v-for="category in categories" v-bind:value="category.id">@{{ category.name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-info btn-md btn-block" type="button" data-toggle="modal" data-target="#createCategory">
                                                    +
                                                </button>
                                            </div>
                                        </div>
                                        {{--                                        lista de marcas--}}
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <select class="form-control" name="brand_id">
                                                        <option value="" disabled selected>Eliga la marca</option>
                                                        <option  v-for="brand in brands" v-bind:value="brand.id">@{{ brand.name }}</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-info btn-md btn-block" type="button" data-toggle="modal" data-target="#createBrand">
                                                    +
                                                </button>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Descripcion</label>
                                            <textarea class="form-control" name="description" id="exampleInput2" cols="30" rows="8"></textarea>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Stock Minimo</label>
                                            <input type="text" class="form-control" id="exampleInput2" name="minimum">

                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group has-rose bmd-form-group is-filled">
                                            <label for="exampleInput2" class="bmd-label-floating">Stock Maximo</label>
                                            <input type="text" class="form-control" id="exampleInput2" name="maximum">
                                        </div>
                                    </div>
                                </div>
                                {{--                                imagen--}}


                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-raised">
                                        <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" width="100" height="170">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                    <span class="btn btn-raised btn-round btn-rose btn-file">
                                       <span class="fileinput-new">Foto</span>
                                       <span class="fileinput-exists">Cambiar</span>
                                       <input type="file" name="photo" />
                                    </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                            <i class="fa fa-times"></i> Eliminar</a>
                                    </div>
                                </div>

                                {{--fin imagen--}}

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="link2" aria-expanded="false">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label for="">Fecha de compra</label>
                                    <input type="text"  name="date_purchase" class="form-control" id="datetimepicker4">
                                </div>
                                <div class="form-group ">
                                    <label for="">Fecha de vencimiento</label>
                                    <input type="text"  name="expiration_date" class="form-control" id="datetimepicker3">
                                </div>
                                <div class="form-group ">
                                    <label for="">Cantidad</label>
                                    <input type="text" class="form-control"  v-model="newProduct.stock">
                                </div>
                            </div>


                        </div>




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
