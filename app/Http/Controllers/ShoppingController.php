<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Setting;
class ShoppingController extends Controller
{
    public function cart()
    {
        return view('cart')->with('settings',Setting::first());
    }
    public function addToCart(Product $product)
    {

        $cart = session()->get('cart');
        if(!$cart)
        {
            $cart =[
                $product->id =>
                $this->sessionData($product)
                ];

               return $this->setSessionAndReturnResponse($cart);
        }

        if(isset($cart[$product->id]))
        {
            $cart[$product->id]['quantity']++;
           return $this->setSessionAndReturnResponse($cart);
        }

        $cart[$product->id] = $this->sessionData($product);
      return $this->setSessionAndReturnResponse($cart);

    }

    public function removeFromCart($id)
    {

        $cart = session()->get('cart');

        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart',$cart);
        }

        return redirect()->route('cart')->with('success','Deleted to cart');

    }

    protected function sessionData(Product $product)
    {
        return [
            'name'=>$product->name,
            'quantity'=>1,
            'price'=>$product->price,
            'image'=>$product->image
        ];

    }

    public function changeQty(Request $request, Product $product)
    {
        $cart = session()->get('cart');
        if($request->change_to === 'down'){
            if(isset($cart[$product->id])){
                if($cart[$product->id]['quantity'] > 1){
                    $cart[$product->id]['quantity']--;
                    return $this->setSessionAndReturnResponse($cart);
                }else{
                    return $this->removeFromCart($product->id);
                }
            }

        }else{
            if(isset($cart[$product->id])){
                    $cart[$product->id]['quantity']++;
                  
                    return $this->setSessionAndReturnResponse($cart);     
        }
      }
    }

    protected function setSessionAndReturnResponse($cart)
    {
        session()->put('cart',$cart);
        return redirect()->route('cart')->with('success','Added to cart');

    }

    public function checkout()
    {
        $cart = session()->get('cart');
        return view('checkout')->with('carts',$cart)
        ->with('settings',Setting::first());
    }
    
}
