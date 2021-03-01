<?php

namespace App\Http\Controllers;

use App\Maker;
use Illuminate\Http\Request;

class MakerController extends BasedController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.pages.maker.index')
            ->with('mfrs',Maker::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.maker.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['unid'] = $this->unid(count(Maker::all()));
        $data['active'] = true;


        if(!empty($request->input('name'))){
            if(Maker::create($data)){
                return redirect(route('mfr.index'))->withMessage('New Manufacturer Created.');
            }else{
                return back()->withErrors(array('error'=>'Unable to complete. Try again later.'));
            }
        }else{
            return back()->withErrors(array('error'=>'Missing fields. Fill form before submitting.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function show(Maker $maker)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function edit($maker)
    {
//        return Maker::where('unid',$maker)->first();
        $mfr = Maker::where('unid',$maker)->first();
        if(!empty($mfr)){
            return view('cms.pages.maker.edit')->with('mfr', $mfr);
        }else{
            return back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maker)
    {
        $mfr = Maker::find($maker);
        if(!empty($mfr)){
            if($mfr->update($request->all())){
                return back()->withMessage('Update Successful');
            }else{
                return back()->withErrors(array('error'=>'Unable to complete'));
            }
        }else{
            return back()->withErrors(array('error'=>'Not Found'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maker $maker)
    {

    }

    public function disable(Maker $maker){
        if(!empty($maker)){
            $data['active'] = false;
            if($maker->update($data)){
                return back()->withMessage('Manufacturer Disabled');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }

    public function enable(Maker $maker){
        if(!empty($maker)){
            $data['active'] = true;
            if($maker->update($data)){
                return back()->withMessage('Manufacturer Enabled');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }
}
