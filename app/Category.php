<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'unid',
        'name',
        'icon',
        'details',
        'banner',
        'active',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'unid');
    }

    public function partners(){
        return $this->hasManyThrough(
            Partner::class,
            PartnerList::class,
            'category_unid',
            'unid',
            'unid',
            'partner_unid'
        );
    }

}
