<?php $__env->startSection('page'); ?>

<div class="content-wrapper">

    

     <div class="container ">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <div class="card " style="width: 48rem;">
                        <div class="card-body">
                          <h5 class="card-title">PET"S BAZAR</h5>
                         
                          <p class="card-text">Buy pets, and we ship to you.</p>
                  
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">

            <div class="row mb30">
               <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="books-item">
                    <div class="books-item-thumb">
                        
                        <img src="<?php echo e($product->image); ?>" alt="<?php echo e($product->image); ?>">
                       
                        <div class="new">New</div>
                        <div class="sale">Sale</div>
                        <div class="overlay overlay-books"></div>
                    </div>
                   

                    <div class="books-item-info">
                       <a href="<?php echo e(route('products.single',['id'=>$product->id ])); ?>">
                         <h5 class="books-title"><?php echo e($product->name); ?></h5>
                        </a>

                       

                        <div class="books-price">Price: <?php echo e($product->amount_with_currency); ?></div>
                    </div>
                 
                                <div class="books-details ">
                            
                                    
                                    <h4>About Product</h4>
                            
                        
                                  <?php echo e($product->description); ?>

                               </div>
                    

                    <a href="<?php echo e(route('products.single',['id'=>$product->id ])); ?>" class="btn btn-small btn--dark add">
                        <span class="text">Add to Cart</span>
                        <i class="seoicon-commerce"></i>
                    </a>

                </div>
            </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row pb120">

              
        
           
     

                <nav class="col-lg-12 ">
                   
                       <div class="flex-container" >
                         <?php echo e($products->links()); ?> 
                       </div>
                    
                    
                </nav>
         

               

               

            </div>
        </div>
        </div>
    </div>
</div>

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>
<br>

<?php echo $__env->make('layouts.boot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/index.blade.php ENDPATH**/ ?>