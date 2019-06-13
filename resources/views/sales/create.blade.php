<!-- Modal -->
<form method="post" v-on:submit.prevent="StoreSale">
    <div class="modal fade " id="createSale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('REALIZAR UNA SALIDA') }}</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-pills nav-pills-primary" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                                Salida
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                                Datos del cliente
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false">
                                Detalles de Venta
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="link1" aria-expanded="true">

                            <div class="row">
                                <div class="col-sm-4">
                                    <span>Productos</span>
                                </div>
                                <div class="col-sm-4">
                                    <span>Cantidad</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-4">
{{--                                    <input type="text" class="form-control" v-model="insertProduct">--}}
                                    <input list="products" v-model="insertProduct" name="products" type="text" class="form-control" placeholder="Elige un color">

                                    <datalist id="products">
                                        <option v-for="produc in products" v-bind:value="produc.barcode" >@{{ produc.name }}</option>
                                    </datalist>

                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" v-model="insertCant">
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-success btn-sm" v-on:click.prevent="NewsVenta">Añadir</button>
                                </div>
                            </div>
                            <br>
                            <ul class="list-unstyled">
                              <li v-for="(sale, index) in Newventa" :key="sale.id">
                                <span v-for="product in products" v-if="sale.product===product.barcode">
                                  <b>@{{ product.name }} </b>
                                    </span>-->
                                  <span>
                                    <i>@{{ sale.quantity }}</i>
                                </span>
                                 <button class="btn btn-sm btn-danger btn-link" @click.prevent="deletevent(index)"><span aria-hidden="true">x</span></button>

                              </li>
                            </ul>
                            <pre>
                                @{{ sumar }}
                            </pre>
                        </div>
                        <div class="tab-pane" id="link2" aria-expanded="false">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">CI/NIT</label>
                                    <input type="text" class="form-control" v-model="fillclient.ci">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" v-model="fillclient.name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Apellidos</label>
                                    <input type="text" class="form-control" v-model="fillclient.last_name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" v-model="fillclient.birthdate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Telefono</label>
                                    <input type="text" class="form-control" v-model="fillclient.phone">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Correo Electronico</label>
                                    <input type="text" class="form-control" v-model="fillclient.email">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="link3" aria-expanded="false">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">CI/NIT</label>
                                    <input type="text" class="form-control" v-model="fillclient.ci">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">No de venta</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" v-model="fillclient.name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Apellidos</label>
                                    <input type="text" class="form-control" v-model="fillclient.last_name">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm" >
                                    <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Producto</th>
                                        <th>Precio po Unidad</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="venta in Newventa">
                                        <td>
                                            @{{ venta.quantity }}
                                        </td>
                                        <td v-for="product in products" v-if="product.barcode===venta.product">
                                            @{{ product.name }}
                                        </td>
                                        <td v-for="product in products" v-if="product.barcode===venta.product">
                                            @{{ product.price }}
                                        </td>
                                        <td v-for="product in products" v-if="product.barcode===venta.product">

                                            @{{ venta.quantity*product.price}} <b>Bs</b>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th colspan="3">Total</th>

                                        <th>
                                            @{{ sumar }}
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>



                            </div>
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
