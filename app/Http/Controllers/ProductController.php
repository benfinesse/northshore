<?php

namespace App\Http\Controllers;

use App\Category;
use App\Maker;
use App\Partner;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends BasedController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.pages.product.index')
            ->with('products',Product::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.product.add')
            ->with('partners', Partner::all())
            ->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate fields

        $product = new Product();


        if($request->input('isnew') === 'on'){
            $product->isnew = true;
        }

        $product->oldprice = $request->input('oldprice');
        if(!is_numeric($request->input('oldprice'))){
            $product->oldprice = null;
        }

        if ($request->hasFile('pic1')) {

            $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

            $photo = $request->file('pic1');

//            $filename = $photo->getClientOriginalName();


            $extension = $photo->getClientOriginalExtension();

            $extension = strtolower($extension);

            $size = $photo->getSize();

//            return $size;

            if ($size > 600000) {
                return back()->withErrors(array('message'=>"This passport is too large. Compress and try again"))->withInput($request->input());
            }

            $time = Carbon::now();

            $check = in_array(strtolower($extension), $allowedfileExtension);

            $filename = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

            if ($check) {

                $directory = 'data/product/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                $product->pic1 = $directory . '/' . $filename;

                $photo->storeAs($directory, $filename, 'public');

//              release memory... lol
//              ini_set('memory_limit', $limit);

            } else {

                return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

            }
        }
        if ($request->hasFile('pic2')) {

            $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

            $photo = $request->file('pic2');

//            $filename = $photo->getClientOriginalName();


            $extension = $photo->getClientOriginalExtension();

            $extension = strtolower($extension);

            $size = $photo->getSize();

//            return $size;

            if ($size > 600000) {
                return back()->withErrors(array('message'=>"This passport is too large. Compress and try again"))->withInput($request->input());
            }

            $time = Carbon::now();

            $check = in_array(strtolower($extension), $allowedfileExtension);

            $filename = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

            if ($check) {

                $directory = 'data/product/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                $product->pic2 = $directory . '/' . $filename;

                $photo->storeAs($directory, $filename, 'public');

//              release memory... lol
//              ini_set('memory_limit', $limit);

            } else {

                return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

            }
        }
        if ($request->hasFile('pic3')) {

            $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

            $photo = $request->file('pic3');

//            $filename = $photo->getClientOriginalName();


            $extension = $photo->getClientOriginalExtension();

            $extension = strtolower($extension);

            $size = $photo->getSize();

//            return $size;

            if ($size > 600000) {
                return back()->withErrors(array('message'=>"This passport is too large. Compress and try again"))->withInput($request->input());
            }

            $time = Carbon::now();

            $check = in_array(strtolower($extension), $allowedfileExtension);

            $filename = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

            if ($check) {

                $directory = 'data/product/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                $product->pic3 = $directory . '/' . $filename;

                $photo->storeAs($directory, $filename, 'public');

//              release memory... lol
//              ini_set('memory_limit', $limit);

            } else {

                return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

            }
        }

        $product->unid = $this->unid('PR');
        $product->active = true;

        $product->name = $request->input('name');
        $product->price = $request->input('oldprice');
        $product->category_id = $request->input('category_id');
        $product->partner_id = $request->input('partner_id');

        $product->detail = $request->input('detail');

        if($product->save()){
            return redirect(route('product.index'))->withMessage('New Product Added.');
        }else{
            return back()->withErrors(array('error'=>'Unable to Complete! Try again.'))->withInput($request->input());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        if(!empty($product)){
            return view('cms.pages.product.edit')
                ->with('product', $product)
                ->with('makers', Partner::all())
                ->with('categories', Category::all());
        }else{
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        if(!empty($product)){

            $data = $request->all();

            if($request->input('isnew') === 'on'){
                $data['isnew'] = true;
            }else{
                $data['isnew'] = false;
            }

            if ($request->hasFile('pic1')) {

                $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

                $photo = $request->file('pic1');

//            $filename = $photo->getClientOriginalName();


                $extension = $photo->getClientOriginalExtension();

                $extension = strtolower($extension);

                $size = $photo->getSize();

//            return $size;

                if ($size > 600000) {
                    return back()->withErrors(array('message'=>"This passport is too large. Compress and try again"))->withInput($request->input());
                }

                $time = Carbon::now();

                $check = in_array(strtolower($extension), $allowedfileExtension);

                $filename = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

                if ($check) {

                    $directory = 'data/product/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                    $data['pic1'] = $directory . '/' . $filename;

                    $photo->storeAs($directory, $filename, 'public');

                    if(!empty($product->pic1)){
//                    @unlink(public_path($teacher->passport))
                        if(file_exists($product->pic1)){
                            unlink($product->pic1);
                        }
                    }

//              release memory... lol
//              ini_set('memory_limit', $limit);

                } else {

                    return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

                }
            }
            if ($request->hasFile('pic2')) {

                $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

                $photo = $request->file('pic2');

//            $filename = $photo->getClientOriginalName();


                $extension = $photo->getClientOriginalExtension();

                $extension = strtolower($extension);

                $size = $photo->getSize();

//            return $size;

                if ($size > 600000) {
                    return back()->withErrors(array('message'=>"This passport is too large. Compress and try again"))->withInput($request->input());
                }

                $time = Carbon::now();

                $check = in_array(strtolower($extension), $allowedfileExtension);

                $filename = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

                if ($check) {

                    $directory = 'data/product/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                    $data['pic2'] = $directory . '/' . $filename;

                    $photo->storeAs($directory, $filename, 'public');

                    if(!empty($product->pic2)){
//                    @unlink(public_path($teacher->passport))
                        if(file_exists($product->pic2)){
                            unlink($product->pic2);
                        }
                    }

//              release memory... lol
//              ini_set('memory_limit', $limit);

                } else {

                    return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

                }
            }
            if ($request->hasFile('pic3')) {

                $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

                $photo = $request->file('pic3');

//            $filename = $photo->getClientOriginalName();


                $extension = $photo->getClientOriginalExtension();

                $extension = strtolower($extension);

                $size = $photo->getSize();

//            return $size;

                if ($size > 600000) {
                    return back()->withErrors(array('message'=>"This passport is too large. Compress and try again"))->withInput($request->input());
                }

                $time = Carbon::now();

                $check = in_array(strtolower($extension), $allowedfileExtension);

                $filename = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h') . "." . $extension;

                if ($check) {

                    $directory = 'data/product/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                    $data['pic3'] = $directory . '/' . $filename;

                    $photo->storeAs($directory, $filename, 'public');

                    if(!empty($product->pic3)){
//                    @unlink(public_path($teacher->passport))
                        if(file_exists($product->pic3)){
                            unlink($product->pic3);
                        }
                    }

//              release memory... lol
//              ini_set('memory_limit', $limit);

                } else {

                    return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

                }
            }

            if($product->update($data)){
                return back()->withMessage('Update Successful');
            }else{
                return back()->withErrors(array('error'=>'Unable to complete'));
            }

        }else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function disable(Product $product){
        if(!empty($product)){
            $data['active'] = false;
            if($product->update($data)){
                return back()->withMessage('Product Disabled');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }

    public function enable(Product $product){
        if(!empty($product)){
            $data['active'] = true;
            if($product->update($data)){
                return back()->withMessage('Product Enabled');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }

    public function feature(Product $product){
        if(!empty($product)){
            $data['featured'] = false;
            if($product->update($data)){
                return back()->withMessage('Product is no longer featured.');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }

    public function defeature(Product $product){
        if(!empty($product)){
            $data['featured'] = true;
            if($product->update($data)){
                return back()->withMessage('Product is now featured.');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }


    public function partners($unid){
        $partner = Partner::whereUnid($unid)->first();
        $partners = Partner::where('unid', '!=', $unid)->get();
        if(!empty($partner)){
            $products = Product::where('partner_id', $partner->unid)->select(['name','unid','pic1'])->get();

            return view('pages.partner.products')
                ->with([
                    'products'=> $products,
                    'partners'=>$partners,
                    'partner'=>$partner,
                ]);
        }
        return redirect()->route('view.categories')->withErrors(['Unable to complete request']);
    }
}
