
<form method="post" v-on:submit.prevent="storePurchase()">

<div class="modal fade " id="purchases" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     data-backdrop="static" data-keyboard="false">

    <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('Registrar Nueva Entrada') }}</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

            <div class="row">
                <div class="col-sm-6">
                    <select v-model="newPurchases.product_id" class="form-control">
                        <option v-for="product in products" :selected="fillProduct.id === product.id" v-bind:value="product.id">@{{ product.name }}</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select v-model="newPurchases.provider_id" class="form-control">
                        <option value="" disabled selected>--elija su proveedor</option>
                        <option v-for="provider in providers" v-bind:value="provider.id">@{{ provider.name }}</option>
                    </select>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" v-model="newPurchases.quantity">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Fecha de vencimiento</label>
                        <input type="date" class="form-control" v-model="newPurchases.expiration_date">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label for="">Fecha de compra</label>
                        <input type="date" class="form-control" v-model="newPurchases.date_purchase">
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
