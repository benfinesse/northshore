<?php

namespace App\Http\Controllers;

use App\Category;
use App\Maker;
use Illuminate\Http\Request;

class CategoryController extends BasedController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.pages.category.index')
            ->with('categories',Category::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.category.add');
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

        $data['unid'] = $this->unid(count(Category::all()));
        $data['active'] = true;


        if(!empty($request->input('name'))){
            if(Category::create($data)){
                return redirect(route('category.index'))->withMessage('New Category Created.');
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
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
//        return Maker::where('unid',$maker)->first();
        $categorz = Category::where('unid',$category)->first();
        if(!empty($categorz)){
            return view('cms.pages.category.edit')->with('category', $categorz);
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
    public function update(Request $request, $category)
    {
        $cat = Category::find($category);
        if(!empty($cat)){
            if($cat->update($request->all())){
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
    public function destroy(Category $category)
    {
        if(!empty($category->products)){
            return  back()->withErrors(['errors'=>'this category has items']);
        }else{
            $category->delete();
            return redirect()->route('category.index')->withMessage('Category Deleted');
        }

    }

    public function disable(Category $category){
        if(!empty($category)){
            $data['active'] = false;
            if($category->update($data)){
                return back()->withMessage('Category Disabled!');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }

    public function enable(Category $category){
        if(!empty($category)){
            $data['active'] = true;
            if($category->update($data)){
                return back()->withMessage('Category Enabled!');
            }else{
                return back()->withErrors(array('error'=>'unable to complete.'));
            }
        }else{
            return back();
        }
    }
}
