<!-- Modal -->


<form method="post" v-on:submit.prevent="">

    <div class="modal fade " id="createSale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-backdrop="static" data-keyboard="false">

        <div class="modal-dialog modal-xl modal-danger" role="document">


            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('CREAR NUEVO ROL') }}</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-5">
                            <h1>Ventas</h1>
                            <ul class="list-unstyled">
                                <li>
                                    <input type="text" v-model="insertProduct">
                                    <input type="text" v-model="insertCant">
                                    <button class="btn btn-success" v-on:click.prevent="NewsVenta">prueba </button>
                                </li>
                                <li v-for="sale in Newventa">

                                    <span v-text="sale.product"></span>
                                    <span v-text="sale.quantity"></span>
                                </li>
                            </ul>
                            <pre>
                                @{{ $data }}
                            </pre>
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
