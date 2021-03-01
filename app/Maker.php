<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    //
    protected $fillable=[
        'unid',
        'name',
        'phone',
        'active',
    ];

    public function prdt(){
        return $this->hasMany(Product::class);
    }





}
