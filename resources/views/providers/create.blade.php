<!-- Modal -->

<form method="post" v-on:submit.prevent="storeProvider()">
<div class="modal fade" id="createProvider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group has-rose bmd-form-group is-filled">
                        <label for="exampleInput2" class="bmd-label-floating">Nombre del proveedor</label>
                        <input type="text" class="form-control" id="exampleInput2" v-model="newProvider.name">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-rose bmd-form-group is-filled">
                                <label for="exampleInput2" class="bmd-label-floating">Telefono</label>
                                <input type="text" class="form-control" id="exampleInput2" v-model="newProvider.phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-rose bmd-form-group is-filled">
                                <label for="exampleInput2" class="bmd-label-floating">Celular</label>
                                <input type="text" class="form-control" id="exampleInput2" v-model="newProvider.mobile">
                            </div>
                        </div>
                    </div>


                    <div class="form-group has-rose bmd-form-group is-filled">
                        <label for="exampleInput2" class="bmd-label-floating">Correo Electronico</label>
                        <input type="text" class="form-control" id="exampleInput2" v-model="newProvider.email">
                    </div>
                    <div class="form-group has-rose bmd-form-group is-filled">
                        <label for="exampleInput2" class="bmd-label-floating">Direccion</label>
                        <input type="text" class="form-control" id="exampleInput2" v-model="newProvider.address">
                    </div>
                    <div class="form-group has-rose bmd-form-group is-filled">
                        <label for="exampleInput2" class="bmd-label-floating">Pagina web</label>
                        <input type="text" class="form-control" id="exampleInput2" v-model="newProvider.web_page">
                    </div>
                    <div class="form-group has-rose bmd-form-group is-filled">
                        <label for="exampleInput2" class="bmd-label-floating">Observaciones</label>
                        <textarea class="form-control" id="exampleInput2" v-model="newProvider.observation" cols="30" rows="10"></textarea>

                    </div>
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>
