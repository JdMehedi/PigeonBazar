<?php $__env->startSection('page'); ?>

<div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="cart">

                        <h1 class="cart-title">In Your Shopping Cart</h1>

                    </div>

                

                        <table class="shop_table cart">

                            <?php $total= 0; ?>
                           

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
                     <?php if(session('cart')): ?>

                     <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                     <?php

                     $sub_total = $product['price'] * $product['quantity'];
                     $total+=$sub_total;
                     ?>

                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="<?php echo e(route('remove.cart',[$id])); ?>" class="product-del remove mx-3" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item mx-2">
                                        <a href="#">
                                            <img src="<?php echo e($product['image']); ?>" alt="<?php echo e($product['name']); ?>" width="100px"class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                        </a>
                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="cart-product-content">
                                        <p class="cart-author"><?php echo e($product['name']); ?></p>
                                        
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h5 class="price amount">$<?php echo e($product['price']); ?></h5>
                                </td>

                                <td class="product-quantity d-flex flex-row">

                                   
                                       
                                       
                                       <form action="<?php echo e(route('change_qty',$id)); ?>" class="d-flex">
                                    
                                        

                                        <button
                                            type="submit"
                                            name="change_to"
                                            value="down"
                                            class="btn btn-success"
                                            >
                                            <?php if($product['quantity'] === 1): ?> x <?php else: ?> - <?php endif; ?>
                                        </button>
                                        <input type="number" value="<?php echo e($product['quantity']); ?>"
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
                                    <h5 class="total amount">$<?php echo e($sub_total); ?></h5>
                                </td>

                            </tr>

                            

                            <tr>
                                <td colspan="5" class="actions">

                                 

                                  

                                </td>
                            </tr>

                            </tbody>

                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                        </table>


                    

                    <div class="cart-total">
                        <h3 class="cart-total-title">Cart Totals</h3>
                        <h5 class="cart-total-total">Total: <span class="price"><?php echo e($total); ?></span></h5>
                        <a href="<?php echo e(route('checkout.cart')); ?>" class="btn btn-medium btn--light-green btn-hover-shadow">
                            <span class="text">Checkout</span>
                            <span class="semicircle"></span>
                        </a>
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/cart.blade.php ENDPATH**/ ?>