<?php $__env->startSection('content'); ?>

     <?php if(count($errors) > 0 ): ?>
        <ul class="list-group">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item text-danger">
                    <?php echo e($error); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?> 


    <div class="card card-default">

        <div class="card-heading my-2 text-center">
           Update setting
        </div>

        <div class="card card-body">

            <form action="<?php echo e(route('settings.update')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="name">Name</label>
                     <input type="text" name="site_name" value="<?php echo e($settings->site_name); ?>" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Contact Number</label>
                     <input type="text" name="contact_number" value="<?php echo e($settings->contact_number); ?>" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                     <input type="text" name="contact_email" value="<?php echo e($settings->contact_email); ?>" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Adress</label>
                     <input type="text" name="address" value="<?php echo e($settings->address); ?>" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">About</label>
                     <input type="text" name="about" value="<?php echo e($settings->about); ?>" class="form-control"> 
                </div>
                  <div class="">
                    <button class="btn btn-success" type="submit">
                        update setting
                    </button>
                  </div>
                </div>

            </form>

        </div>

    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/settings/index.blade.php ENDPATH**/ ?>