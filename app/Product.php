<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'unid',
        'name',
        'price',
        'isnew',
        'oldprice',
        'category_id',
        'partner_id',
        'active',
        'pic1',
        'pic2',
        'pic3',
        'featured',
        'detail',
        'discount',
    ];

    public function partner(){
        return $this->belongsTo(Partner::class, 'partner_id', 'unid');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getpic1(){
        return !empty($this->pic1)?url($this->pic1):'';
    }

    public function getpic2(){
        return !empty($this->pic2)?url($this->pic2):'';
    }

    public function getpic3(){
        return !empty($this->pic3)?url($this->pic3):'';
    }

    public function getdis(){
        if(empty($this->oldprice)){
            return null;
        }else{
            return 'less %' .round((($this->oldprice - $this->price )/ $this->oldprice) * 100);
        }
    }

    public function getShortInfoAttribute(){
        return Str::words($this->detail, 30, ' ...');
    }

    public function getBriefInfoAttribute(){
        return Str::words($this->detail, 10, ' ...');
    }


}
