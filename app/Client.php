<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    protected $fillable=[
            'ci',
            'name',
            'last_name',
            'birthdate',
            'phone',
            'email'
    ];
    public function sale(){
        return $this->hasMany(Sale::class);
    }

}
