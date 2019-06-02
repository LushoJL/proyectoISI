<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expiration extends Model
{
    protected $table = 'expirations';
    protected $fillable = [
        'expiration_date',
        'stock',
        'product_id'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
