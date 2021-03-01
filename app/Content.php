<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable=[
        'type',
        'logo1',
        'logo2',
        'title',
        'group',
        'detail1',
        'detail2',
        'btn',
        'target',
    ];

    public function logo1(){
        return !empty($this->logo1)?url($this->logo1):url('img/default.png');
    }
    public function logo2(){
        return !empty($this->logo2)?url($this->logo2):url('img/default.png');
    }
}
