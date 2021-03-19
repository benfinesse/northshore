<?php

namespace App\Http\Controllers\V2;

use App\Content;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $banner = Content::inRandomOrder()->where('type','banner')->where('group', 'home')->first();
        $banner2 = Content::inRandomOrder()->where('type','banner')->where('group', 'home')->where('id', '!=', @$banner->id)->first();
        $products = Product::where('active', true)->inRandomOrder()->take(6)->get();
        $randomProduct = Product::where('active', true)->inRandomOrder()->first();
        return view('pages.v2.home.index')
            ->with([
                'banner'=> $banner,
                'banner2'=> $banner2,
                'products'=>$products,
                'randomProduct'=>$randomProduct
            ]);
    }
}
