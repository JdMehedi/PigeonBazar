<?php $__env->startSection('content'); ?>

<div class="container " >
  
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8 ">
            <div class="card card-default">

                <div class="card-heading">
                  <h3 class="text-center my-2">Products</h3>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </thead>

                        <tbody>
                            <?php if($products->count() > 0): ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td><a class="btn btn-sm btn-info" href="<?php echo e(route('products.edit',['id'=>$product->id] )); ?>">Edit</a></td>
                                        <td>
                                            <form action="<?php echo e(route('products.destroy',['id'=>$product->id ])); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>


                                                <button class="btn btn-danger btn-sm">Delete</button>

                                            </form>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>
                                <tr>
                                    <th colspan="5" class="text-center">
                                        <h3>No post published yet</h3>
                                    </th>
                                </tr>
                                <?php endif; ?>
                           

                        </tbody>
                    </table>
                    <div class="text-center">
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/products/index.blade.php ENDPATH**/ ?>