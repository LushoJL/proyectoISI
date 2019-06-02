
<form method="post" v-on:submit.prevent="storeBrand()">
<div class="modal fade" id="createBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Crear Marca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group has-rose bmd-form-group is-filled">

                    <label for="exampleInput2" class="bmd-label-floating">Nombre de la marca</label>
                    <input type="text" class="form-control" name="name" id="exampleInput2" v-model="newBrand.name">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">guardar</button>

            </div>


        </div>
    </div>
</div>
</form>
