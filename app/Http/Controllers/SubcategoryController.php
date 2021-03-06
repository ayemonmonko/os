<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subcategories = Subcategory::all();
        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();
        return view('backend.subcategories.create',compact('categories')) ;   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
            'name'=>'required',
            'category'=>'required'
        ]);
        // If include file,upload
        

        // Data insert
        $Subcategory=new Subcategory;
        $Subcategory->name=$request->name;
        $Subcategory->category_id=$request->category;
        $Subcategory->save();

        // Redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('backend.subcategories.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories=Category::all();
        $subcategory=Subcategory::find($id);
        return view('backend.subcategories.edit',compact('categories','subcategory')) ; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'category'=>'required'
        ]);
        // If include file,upload
        

        // Data insert
        $Subcategory=Subcategory::find($id);
        $Subcategory->name=$request->name;
        $Subcategory->category_id=$request->category;
        $Subcategory->save();

        // Redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $subcategory=Subcategory::find($id);
        $subcategory->delete();
         // redirect 
        return redirect()->route('subcategories.index');
    }
}
