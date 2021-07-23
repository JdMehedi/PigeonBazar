<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products',Product::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('products.create');
    // }
     public function create()
      {
        
         return view('products.create');
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
        $this->validate($request, [
            'name'=>'required|max:20',
            'price'=>'required|max:20',
            'image'=>'required| mimes:jpeg,jpg,png',
            'description'=>'required'

        ]);
        

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/products',$image_new_name);

        
        $products = Product::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'image'=>'uploads/products/'.$image_new_name,
            'description'=>$request->description

        ]);
       

        $products->save();
       
        Session()->flash('success','Post created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);

        return view('products.edit')->with('product',$products);
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
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'

        ]);

        $products = Product::find($id);

        if($request->hasFile('image'))
        {
            $image= $request->image;
            $image_new_name = time().$image->getClientOriginalname();
            $image->move('uploads/products',$image_new_name);
            $products->image = 'uploads/products/'.$image_new_name;
        }


        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;

        $products->save();

        Session()->flash('success','Updated successfully');

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $image_path = '/uploads/products/' . $product->image;

        if(file_exists($image_path))
        {
            Storage::delete($image_path);
         }
        

        $product->delete();

        Session()->flash('success','Product deleted successfully');

        return redirect()->back();
    }
}
