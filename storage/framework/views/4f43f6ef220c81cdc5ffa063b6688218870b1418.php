<?php $__env->startSection('title'); ?>
    <?php echo e($speciality->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="<?php echo e(asset('public/img/patient-icon.png')); ?>"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b><?php echo e($speciality->name); ?></b></h4>
                            <hr>
                            <?php if(isset($speciality->icon)): ?>
                                <p><b><?php echo e(__('sentence.Speciality Icon')); ?> :</b> <?php echo e($speciality->icon); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/speciality/view.blade.php ENDPATH**/ ?>