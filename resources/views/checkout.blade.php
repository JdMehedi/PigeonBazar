


@extends('layouts.frontend')

@section('page')

@php $total= 0; @endphp
<div class="container-fluid">
	<div class="row medium-padding120 bg-border-color">
		<div class="container">

			<div class="row">

				<div class="col-lg-12">
			<div class="order">
				<h2 class="h1 order-title text-center">Your Order</h2>
				<form action="#" method="post" class="cart-main">
					<table class="shop_table cart">
						<thead class="cart-product-wrap-title-main">
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
						</tr>
						</thead>
						<tbody>

						@if(session('cart'))
						@foreach (session('cart') as $id => $product)

						@php

						$sub_total = $product['price'] * $product['quantity'];
						 $total+= $sub_total;
						@endphp
						<tr class="cart_item">

							<td class="product-thumbnail">

								<div class="cart-product__item">
									<div class="cart-product-content">
										<h5 class="cart-product-title">{{$product['name']}}</h5>
									</div>
								</div>
							</td>

							<td class="product-quantity">

								<div class="quantity">
									{{$product['quantity']}}
								</div>

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{$product['price']}}</h5>
							</td>

						</tr>
						<tr class="cart_item ">

							<td class="product-thumbnail">


								{{-- <div class="cart-product-content">
									<h5 class="cart-product-title">	Subtotal:</h5>
								</div> --}}


							</td>

							<td class="product-quantity">

							</td>

							<td class="product-subtotal">
								
							</td> 
						</tr>

						 {{-- <tr class="cart_item total">

							<td class="product-thumbnail">


								<div class="cart-product-content">
									<h5 class="cart-product-title">Total:</h5>
								</div>


							</td>

							<td class="product-quantity">

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{$sub_total}}</h5>
							</td>
						</tr>  --}}
							
						@endforeach
					
					
					
					
					<tr class="progress-bar bg-success my-5" role="progressbar" style="width: 205%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">

						<td class="product-thumbnail">


							<div class="cart-product-content">
								<h5 class="cart-product-title my-2">Sub Total:</h5>
							</div>


						</td>

						<td class="product-quantity">

						</td>

						<td class="product-thumbnail ">

							
								<div class="cart-product-content">
									<h5 class="cart-product-title">${{$total}}</h5>
								</div>
							
						</td>
					</tr>
					

						</tbody>
						@endif
					</table>

					<div class="cheque">

						<div class="logos">
							<a href="#" class="logos-item">
								<img src="{{asset('app/img/visa.png')}}" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="{{asset('app/img/mastercard.png')}}" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="{{asset('app/img/discover.png')}}" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="{{asset('app/img/amex.png')}}" alt="Amex">
							</a>
							
							<span style="float: right;">
								<form action="{{route('cart.checkout')}}" method="POST">
									{{ csrf_field() }}
									{{method_field('POST')}}
									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="pk_test_51JCHpFK7cMmABl7pccc3YRQP67U8wtkpqEKytssUrUpT0YxgFeBUbUVCzV1WmDDQiyeXqrJpnYJgChcSCjQeOe2Z00KC8dNt51"
									    data-amount="{{$sub_total * 100 }}"
									    data-name="Pigeon Bazar"
									    data-description="Widget"
									    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
									    data-locale="auto"
									      >
									  </script>
								</form>
							</span>
						</div>
					</div>

				</form>
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