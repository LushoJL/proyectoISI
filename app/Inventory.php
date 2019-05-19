<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';
    protected $fillable = [
            'maximum',
            'minimum',
            'product_id',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
