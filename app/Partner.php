<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Partner extends Model
{
    //
    protected $fillable =[
        'name', 'website', 'details', 'brand', 'unid'
    ];

    public function websites(){

        $links = "";
        foreach(explode(',', $this->website) as $site){
            $links.="<a href='http://$site' target='_blank'>$site</a> ";
        }

        return $links;
    }

    public function brand(){
        return !empty($this->brand)?url($this->brand):url('img/shop.jpg');
    }

    public function details(){
        $words = strip_tags($this->details);
        return Str::words(ucfirst(strtolower($words)), 16) ;
//        return $this->details;
    }

    public function products(){
        return $this->hasMany(Product::class, 'partner_id', 'unid');
    }
}
