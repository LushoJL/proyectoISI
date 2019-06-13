<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table='purchases';
    protected $fillable=[

        'quantity',
        'client_id',
        'product_id',
        'date_sale',
        'price',
        'state'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
