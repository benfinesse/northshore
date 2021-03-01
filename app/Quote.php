<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable =[
        'org_name',
        'org_phone',
        'org_email',
        'quo_detail',
        'seen',
        'user_id',
    ];
}
