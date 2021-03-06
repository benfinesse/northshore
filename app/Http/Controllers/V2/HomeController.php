<?php

namespace App\Http\Controllers\V2;

use App\Category;
use App\Content;
use App\Partner;
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

    public function category(){
        $categories = Category::orderBy('id', 'desc')->get();

        return view('pages.v2.category.index')->with(['items'=>$categories]);
    }

    public function partners(){
        $categories = Partner::orderBy('id', 'desc')->get();

        return view('pages.v2.partners.index')->with(['items'=>$categories]);
    }

    public function about(){

        return view('pages.v2.about.index');
    }

    public function contact(){

        return view('pages.v2.contact.index');
    }

    public function products(Request $request){
        $query = Product::query();

        $c_id = $request->input('cid');
        $p_id = $request->input('pid');
        if(!empty($c_id)){
            $items = $query->where('category_id', $c_id)->where('active', true)->paginate(12);
        }elseif(!empty($p_id)){
            $items = $query->where('partner_id', $p_id)->where('active', true)->paginate(12);
        }else{
            $items = $query->paginate(12);
        }


        return view('pages.v2.product.index')->with([
            'items'=>$items
        ]);
    }

    public function showProduct($unid){
        $product = Product::where('unid', $unid)->first();
        if(!empty($product)){
            return view('pages.v2.product.show')->with(['product'=>$product]);
        }
        return redirect()->route('products')->withMessage("Resource not found.");
    }
}
