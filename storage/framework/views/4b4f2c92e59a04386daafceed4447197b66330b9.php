<?php $__env->startSection('content'); ?>



<div class="container" >
 
    <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8 col-md-offset-2">
            <?php if(count($errors) > 0 ): ?>
            <ul class="list-group">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item text-danger">
                        <?php echo e($error); ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>

            <div class="card card-default ">
                <div class="card-heading">
                   <h3 class="my-2 text-center">Dashboard</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('products.update',['id'=>$product->id ])); ?>" method="POST" enctype="multipart/form-data" >
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>

                      

                        <div class="form-group">
                            <label for="title">Name</label>
                             <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="text" name="price" value="<?php echo e($product->price); ?>"  class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="name"> Image</label>
                             <input type="file" name="image"  class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea name="description" id="description" cols="5" rows="5" class="form-control">  <?php echo e($product->description); ?> </textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success form-control "  type="submit">
                                Update Products
                            </button>

                        </div> 
        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/products/edit.blade.php ENDPATH**/ ?>