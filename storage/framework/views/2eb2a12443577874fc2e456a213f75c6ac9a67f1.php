<?php $__env->startSection('page'); ?>

<?php $total= 0; ?>
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

						<?php if(session('cart')): ?>
						<?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<?php

						$sub_total = $product['price'] * $product['quantity'];
						 $total+= $sub_total;
						?>
						<tr class="cart_item">

							<td class="product-thumbnail">

								<div class="cart-product__item">
									<div class="cart-product-content">
										<h5 class="cart-product-title"><?php echo e($product['name']); ?></h5>
									</div>
								</div>
							</td>

							<td class="product-quantity">

								<div class="quantity">
									<?php echo e($product['quantity']); ?>

								</div>

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">$<?php echo e($product['price']); ?></h5>
							</td>

						</tr>
						<tr class="cart_item ">

							<td class="product-thumbnail">


								


							</td>

							<td class="product-quantity">

							</td>

							<td class="product-subtotal">
								
							</td> 
						</tr>

						 
							
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					
					
					
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
									<h5 class="cart-product-title">$<?php echo e($total); ?></h5>
								</div>
							
						</td>
					</tr>
					

						</tbody>
						<?php endif; ?>
					</table>

					<div class="cheque">

						<div class="logos">
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('app/img/visa.png')); ?>" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('app/img/mastercard.png')); ?>" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('app/img/discover.png')); ?>" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('app/img/amex.png')); ?>" alt="Amex">
							</a>
							
							<span style="float: right;">
								<form action="<?php echo e(route('cart.checkout')); ?>" method="POST">
									<?php echo e(csrf_field()); ?>

									<?php echo e(method_field('POST')); ?>

									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="pk_test_51JCHpFK7cMmABl7pccc3YRQP67U8wtkpqEKytssUrUpT0YxgFeBUbUVCzV1WmDDQiyeXqrJpnYJgChcSCjQeOe2Z00KC8dNt51"
									    data-amount="<?php echo e($sub_total * 100); ?>"
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

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>
<br>

<?php echo $__env->make('layouts.boot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/checkout.blade.php ENDPATH**/ ?>