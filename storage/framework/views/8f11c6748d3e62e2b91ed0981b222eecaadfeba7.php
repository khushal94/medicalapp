<?php $__env->startSection('title'); ?>
    <?php echo e($package->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="<?php echo e(empty($package->image) ? asset('public/img/patient-icon.png') : url('public/imgs/' . $package->image)); ?>"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b><?php echo e($package->name); ?></b></h4>
                            <hr>
                            <?php if(isset($package->lab_name)): ?>
                                <p><b><?php echo e(__('sentence.Lab Name')); ?> :</b> <?php echo e($package->lab_name); ?></p>
                            <?php endif; ?>

                            <?php if(isset($package->rate)): ?>
                                <p><b><?php echo e(__('sentence.Package Rate')); ?> :</b> <?php echo e($package->rate); ?></p>
                            <?php endif; ?>

                            <?php if(isset($package->lab_test_ids)): ?>
                                <p><b><?php echo e(__('sentence.Test')); ?> :</b> <?php echo e($package->lab_test_ids); ?></p>
                            <?php endif; ?>

                            <?php if(isset($package->description)): ?>
                                <p><b><?php echo e(__('sentence.Description')); ?> :</b> <?php echo e($package->description); ?></p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/package/view.blade.php ENDPATH**/ ?>