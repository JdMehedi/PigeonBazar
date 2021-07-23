<?php $__env->startSection('page'); ?>
<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Search results: <?php echo e($query); ?></h1>
    </div>
</div>



<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
           <?php if($product->count() > 0): ?>

                <div class="row">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="<?php echo e($product->image); ?>" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href=""><?php echo e($product->name); ?></a></h6>
                                    
                                    <div class="product-details-info-price"><h5>Price: $<?php echo e($product->price); ?></h5></div>
                                    <p class="product-details-info-text">
                                        <?php echo e($product->description); ?>

                                    </p>
                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </div>

           <?php else: ?>

                <h2 class="text-center">No post found</h2>
           <?php endif; ?>

            <!-- End Post Details -->
            <br>
            <br>
            <br>
            <!-- Sidebar-->

                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/results.blade.php ENDPATH**/ ?>