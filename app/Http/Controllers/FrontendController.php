<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items=Item::orderBy('id','desc')
    				->take(6)
    				->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }
    public function item($value='')
    {
    	$items=Item::orderBy('id','desc')
    				->get();
    	return view('frontend.items',compact('items'));
    }
    public function detail($id)
    {
    	$item=Item::find($id);
        // return view('backend.items.show',compact('item'));
    	return view('frontend.detail',compact('item'));
    }
    public function register($value='')
    {
    	return view('frontend.register');
    }
    public function login($value='')
    {
    	return view('frontend.login');
    }
    public function checkout($value='')
    {
    	return view('frontend.checkout');
    }
    public function profile($value='')
    {
    	return view('frontend.profile');
    }
}
