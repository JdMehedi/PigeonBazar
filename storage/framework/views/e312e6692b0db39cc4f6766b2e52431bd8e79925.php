<?php $__env->startSection('page'); ?>
<div class="container">
    <div class="row medium-padding120">
        <div class="product-details">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="product-details-thumb">
                    <div class="swiper-container" data-effect="fade">
                     
                        <div class="swiper-wrapper">
                           
                         
                           <div class="product-details-img-wrap swiper-slide">
                            <img src="<?php echo e($product->image); ?>" alt="product" data-swiper-parallax="-10">
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div class="product-details-info">
                    <div class="product-details-info-price">Price:$<?php echo e($product->price); ?></div>
                    <h3 class="product-details-info-title"><?php echo e($product->name); ?></h3>
                    <p class="product-details-info-text">
                        <?php echo e($product->description); ?>

                    </p>
                        
                        <a href="<?php echo e(route('add.cart',[ $product->id ])); ?>" class="btn btn-medium btn--primary">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/single.blade.php ENDPATH**/ ?>