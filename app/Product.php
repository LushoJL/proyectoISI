<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'barcode',//codigo de barras
        'name',
        'description',
        'price',
        'photo',
        'brand_id',
        'category_id',
        'maximum',
        'minimum',
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
    public function sale(){
        return $this->hasMany(Sale::class);
    }
}
