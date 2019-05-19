<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table='providers';
    protected $fillable = [
        'name',
        'phone',
        'mobile',
        'email',
        'observation',
        'address',
        'web_page',
    ];
    public function purcharse(){
        return $this->hasMany(Purchase::class);
    }
}
