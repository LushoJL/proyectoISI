<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
        'brand_id',
        'category_id'
    ];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function expiration(){
        return $this->hasMany(Expiration::class);
    }
    public function inventory(){
        return $this->hasMany(Inventory::class);
    }
    public function purcharse(){
        return $this->hasMany(Purchase::class);
    }
}
