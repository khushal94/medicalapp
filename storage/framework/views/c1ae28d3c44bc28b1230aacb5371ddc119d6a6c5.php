<?php $__env->startSection('title'); ?>
    <?php echo e($coupon->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="<?php echo e(empty($coupon->image) ? asset('public/img/patient-icon.png') : url('public/imgs/' . $coupon->image)); ?>"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b><?php echo e($coupon->name); ?></b></h4>
                            <hr>
                            <?php if(isset($coupon->code)): ?>
                                <p><b><?php echo e(__('sentence.Coupon Code')); ?> :</b> <?php echo e($coupon->code); ?></p>
                            <?php endif; ?>

                            <?php if(isset($coupon->discount_type)): ?>
                                <p><b><?php echo e(__('sentence.Discount Type')); ?> :</b> <?php echo e($coupon->discount_type == 'P' ? __('sentence.Percentage') : __('sentence.Amount')); ?></p>
                            <?php endif; ?>

                            <?php if(isset($coupon->discount_amount)): ?>
                                <p><b><?php echo e(__('sentence.Discount Amount')); ?> :</b> <?php echo e(__('sentence.' . $coupon->discount_amount)); ?></p>
                            <?php endif; ?>

                            <?php if(isset($coupon->startingdate)): ?>
                                <p><b><?php echo e(__('sentence.Starting Date')); ?> :</b> <?php echo e($coupon->startingdate); ?></p>
                            <?php endif; ?>

                            <?php if(isset($coupon->endingdate)): ?>
                                <p><b><?php echo e(__('sentence.Ending Date')); ?> :</b> <?php echo e($coupon->endingdate); ?></p>
                            <?php endif; ?>

                            <?php if(isset($coupon->minimum_amount)): ?>
                                <p><b><?php echo e(__('sentence.Minimum Amount')); ?> :</b> <?php echo e($coupon->minimum_amount); ?></p>
                            <?php endif; ?>
                            <?php if(isset($coupon->category)): ?>
                                <p><b><?php echo e(__('sentence.Category')); ?> :</b> 
                                    <?php echo e($coupon->category); ?>

                                </p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/coupon/view.blade.php ENDPATH**/ ?>