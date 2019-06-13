<div class="table-responsive">
    <table class="table">
        <thead class=" text-primary">
        <th>
            Numero de venta
        </th>
        <th>
           Codigo de Barra
        </th>
        <th>
            Producto
        </th>
        <th>
            Cliente
        </th>
        <th>
            Fecha de salida
        </th>
        <th>
            Cantidad
        </th>
        <th>
            Precio
        </th>



        </thead>
        <tbody>

        <tr v-for="sale in sales">
            <td>
                @{{ sale.id }}
            </td>
            <td>
                @{{ sale.barcode }}
            </td>
            <td>
                @{{ sale.name }}
            </td>
            <td>
                @{{ sale.client }}
            </td>
            <td>
                @{{ sale.date_sale }}
            </td>
            <td>
                @{{ sale.quantity }}
            </td>
            <td>
                @{{ sale.price }} <b>Bs</b>
            </td>
        </tr>
        </tbody>
    </table>
</div>
