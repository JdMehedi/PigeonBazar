

@extends('layouts.frontend')

@section('page')

<div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="cart">

                        <h1 class="cart-title">In Your Shopping Cart</h1>

                    </div>

                

                        <table class="shop_table cart">

                            @php $total= 0; @endphp
                           

                            <thead class="cart-product-wrap-title-main">
                                <tr>
                                  
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail"><h5>Product Image</h5> </th>
                                    <th class="product-thumbnail"><h5> Name</h5></th>
                                    <th class="product-thumbnail"><h5> Price</h5></th>
                                    <th class="product-quantity "><h5>Quantity</h5></th>
                                    <th class="product-subtotal"><h5>Total</h5></th>
                                 
                                </tr>
                                </thead>
                        
                            <tbody>
                     @if(session('cart'))

                     @foreach(session('cart') as $id => $product)

                     @php

                     $sub_total = $product['price'] * $product['quantity'];
                     $total+=$sub_total;
                     @endphp

                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="{{route('remove.cart',[$id])}}" class="product-del remove mx-3" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item mx-2">
                                        <a href="#">
                                            <img src="{{$product['image']}}" alt="{{$product['name']}}" width="100px"class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                        </a>
                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="cart-product-content">
                                        <p class="cart-author">{{$product['name']}}</p>
                                        
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h5 class="price amount">${{$product['price']}}</h5>
                                </td>

                                <td class="product-quantity d-flex flex-row">

                                   
                                       
                                       {{-- {{$product['quantity']}} --}}
                                       <form action="{{route('change_qty',$id)}}" class="d-flex">
                                    
                                        

                                        <button
                                            type="submit"
                                            name="change_to"
                                            value="down"
                                            class="btn btn-success"
                                            >
                                            @if($product['quantity'] === 1) x @else - @endif
                                        </button>
                                        <input type="number" value="{{$product['quantity']}}"
                                        disabled >
                                        <button
                                        type="submit"
                                        name="change_to"
                                        value="up"
                                        class="btn btn-success"
                                        >
                                       +
                                    </button>
                                    </form>

                                       
                               

                                </td>

                                <td class="product-subtotal">
                                    <h5 class="total amount">${{$sub_total}}</h5>
                                </td>

                            </tr>

                            

                            <tr>
                                <td colspan="5" class="actions">

                                 

                                  

                                </td>
                            </tr>

                            </tbody>

                             @endforeach

                            @endif
                        </table>


                    

                    <div class="cart-total">
                        <h3 class="cart-total-title">Cart Totals</h3>
                        <h5 class="cart-total-total">Total: <span class="price">{{$total}}</span></h5>
                        <a href="{{route('checkout.cart')}}" class="btn btn-medium btn--light-green btn-hover-shadow">
                            <span class="text">Checkout</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@include('includes.footer')
    
@endsection
<br>
@extends('layouts.boot')  
 
