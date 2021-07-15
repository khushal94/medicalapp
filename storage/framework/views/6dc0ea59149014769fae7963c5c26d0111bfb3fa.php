<?php $__env->startSection('title'); ?>
    <?php echo e($nurse->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img
                                    src="<?php echo e(empty($nurse->Nurse->image) ? asset('public/img/patient-icon.png') : url('public/imgs/' . $nurse->Nurse->image)); ?>"
                                    class="img-profile img-fluid"></center>
                            <h4 class="text-center"><b><?php echo e($nurse->name); ?></b></h4>
                            <hr>
                            <?php if(isset($nurse->Nurse->birthday)): ?>
                                <p><b><?php echo e(__('sentence.Age')); ?> :</b> <?php echo e($nurse->Nurse->birthday); ?>

                                    (<?php echo e(\Carbon\Carbon::parse($nurse->Nurse->birthday)->age); ?> Years)</p>
                            <?php endif; ?>

                            <?php if(isset($nurse->Nurse->gender)): ?>
                                <p><b><?php echo e(__('sentence.Gender')); ?> :</b> <?php echo e(__('sentence.' . $nurse->Nurse->gender)); ?></p>
                            <?php endif; ?>

                            <?php if(isset($nurse->Nurse->phone)): ?>
                                <p><b><?php echo e(__('sentence.Phone')); ?> :</b> <?php echo e($nurse->Nurse->phone); ?></p>
                            <?php endif; ?>

                            <?php if(isset($nurse->Nurse->address)): ?>
                                <p><b><?php echo e(__('sentence.Address')); ?> :</b> <?php echo e($nurse->Nurse->address); ?></p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/nurse/view.blade.php ENDPATH**/ ?>