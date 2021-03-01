<?php

namespace App\Http\Controllers;

use App\Category;
use App\Partner;
use App\PartnerList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.pages.partner.index')
            ->with('partners',Partner::paginate(40));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('active', true)->select([ 'unid', 'name',])->get();

        return view('cms.pages.partner.add')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image='';
        if ($request->hasFile('passport')) {

            $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg', 'svg'];

            $photo = $request->file('passport');

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

                $directory = 'data/partner/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                $image = $directory . '/' . $filename;

                $photo->storeAs($directory, $filename, 'public');

//              release memory... lol
//              ini_set('memory_limit', $limit);

            } else {

                return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

            }
        }
        $partner = new Partner();

        $partner->name = $request->input('name');
        $partner->website = $request->input('website');
        $partner->details = $request->input('details');
        $partner->brand = $image;
        $partner->unid = $this->unid('PT');

        if($partner->save()){
            //loop through category and update
            if(!empty($request->input('groups'))){
                foreach ($request->input('groups') as $categoryId){
                    $pl = new PartnerList();
                    $pl->partner_unid = $partner->unid;
                    $pl->category_unid = $categoryId;
                    $pl->active = true;
                    $pl->save();
                }
            }
            return redirect()->route('partner.index')->withMessage('A partner profile created.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('cms.pages.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {

        $image='';
        if ($request->hasFile('passport')) {

            $allowedfileExtension = ['jpg', 'png', 'bmp', 'jpeg', 'svg'];

            $photo = $request->file('passport');

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

                $directory = 'data/partner/' . date_format($time, 'Y') . '/' . date_format($time, 'm');
                $image = $directory . '/' . $filename;

                //delete old image
                if(!empty($partner->brand)){
                    unlink(url($partner->brand));
                }

                $photo->storeAs($directory, $filename, 'public');

//              release memory... lol
//              ini_set('memory_limit', $limit);

            } else {

                return back()->withErrors(array('message' => 'Your passport must be of types : jpeg,bmp,png,jpg.'))->withInput($request->input());

            }
        }
        $partner->name = $request->input('name');
        $partner->website = $request->input('website');
        $partner->details = $request->input('details');
        if(!empty($image)){
            $partner->brand = $image;
        }


        if($partner->update()){
            return back()->withMessage('Update Successful.');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
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

    public function partnerFix(){
        //get all partner with empty unid
        $partners = Partner::where('unid', null)->get();
        $count = 0;

        foreach ($partners as $partner){
            //update their unid with unique id
            $partner->unid = $this->unid('PT');
            $partner->update();
            $count++;
        }


        return "$count partners unid fixed";


    }
}
