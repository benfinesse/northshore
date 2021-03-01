<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Partner;
use App\Product;
use App\Quote;
use Illuminate\Http\Request;
use Mockery\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Content::where('type','banner')->where('group', 'home')->get();
        $products = Product::where('active', true)->take(4)->get();
        $feature = Product::where('active', true)->where('featured', true)->first();
        return view('pages.home.home')
            ->with('banners', $banners)
            ->with('feature', $feature)
            ->with('products', $products);
    }

    public function categories(){
        $categories = Category::where('active', true)->get();
        return view('pages.category.main')
            ->with('categories', $categories);
    }

    public function category($unid){
        $category = Category::where('active', true)->where('unid', $unid)->first();
        return view('pages.categori.main')->with('category', $category);
    }

    public function product(){
        return view('pages.product.listings');
    }

    public function productName($pid){
        $product = Product::where('active', true)->where('unid', $pid)->first();
        if(!empty($product)){
            return view('pages.product.main')->with('product', $product);
        }
        return redirect()->route('view.categories');

    }

    public function showmodal($pid){
        $product = Product::where('active', true)->where('unid', $pid)->first();
        return view('pages.modal.item')->with('product', $product);
    }

    public function about(){
        return view('pages.about.about');
    }

    public function partners(){

        return view('pages.partner.partner')
            ->with('partners', Partner::get());
    }

    public function topartner($id){
        //get data
//        $partner = Partner::findOrFail($id);
        $partner = Partner::where('unid', $id)->first();
        if(!empty($partner)){
            return view('pages.partner.topartner', compact('partner'));
        }else{

        }

    }

    public function outlets(){
        return view('pages.outlet.outlets');
    }

    public function mfrs(){
        return view('pages.outlet.mfrs');
    }

    public function skincenter(){
        return view('pages.skincenter.skin');
    }

    public function makequote(){
        return view('pages.quote.index');
    }

    public function storeQuote(Request $request){
        $data['org_name'] = $request->input('org_name');
        $data['org_phone'] = $request->input('org_phone');
        $data['org_email'] = $request->input('org_email');
        $data['quo_detail'] = $request->input('quo_detail');

        Quote::create($data);

        //send mail to official email
        //send mail to boss email
        //send mail to sender email
        //return back

        return redirect()->route('makequote')->withMessage('Thank you for sending us your quote, we will contact you shortly.');



    }

    public function newsLetter(Request $request){

    }
}
