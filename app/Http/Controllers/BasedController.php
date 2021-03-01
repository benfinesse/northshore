<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class BasedController extends Controller
{
    //
    public function __construct()
    {

    }


    public function unidid(){
        $token = "";
        $codes = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codes .= "abcdefghijklmnopqrstuvwxyz";
        $codes .= "0123456789";
        $max = strlen($codes);
        for($i=0; $i < 15; $i++){
            $token.= $codes[random_int(0, $max-1)];
        }
        return $token;
    }

    public function unid($initial){
        return uniqid($initial.$this->unidid(),false);
    }
}
