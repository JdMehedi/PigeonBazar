<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use App\Setting;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index',['products'=>Product::paginate(3)])->
        with('settings',Setting::first());
                           
    }

    public function singleProduct($id)
    {
       
        return view('single',['product'=>Product::find($id)])
                                ->with('users',User::find($id))
                                ->with('settings',Setting::first());
    }

    public function results()
    {
        $product = Product::where('name','like', '%'.request('query').'%')->get();
    
     
      

          return view('results',)->with('name', 'Search results:'.request('query'))
                                ->with('product',$product)
                                 ->with('query',request('query'));
    }
}
