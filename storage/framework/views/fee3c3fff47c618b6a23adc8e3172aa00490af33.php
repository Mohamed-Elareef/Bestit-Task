<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($p[0]->name); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                 

                        <br> name : <?php echo e($p[0]->name); ?>

                        <br> Description :  <?php echo e($p[0]->Description); ?>

                        <br> Price : <?php echo e($p[0]->Price); ?>

                        <br> <img src="<?php echo e($p[0]->Image); ?>" width="100" height="100">
 
                         
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/example-app/resources/views/ShowProduct.blade.php ENDPATH**/ ?>