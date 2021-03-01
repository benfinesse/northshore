<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerList extends Model
{
    protected $fillable = [
        'partner_unid',
        'category_unid',
        'active',
    ];

    public function partner(){
        $this->hasOne(Partner::class, 'unid', 'partner_unid');
    }

    public function category(){
        $this->hasOne(Category::class, 'unid', 'category_unid');
    }
}
