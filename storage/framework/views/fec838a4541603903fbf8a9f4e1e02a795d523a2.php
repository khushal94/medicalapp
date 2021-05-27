

<?php $__env->startSection('title'); ?>
    <?php echo e($doctor->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="<?php echo e(asset('img/patient-icon.png')); ?>"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b><?php echo e($doctor->name); ?></b></h4>
                            <hr>
                            <?php if(isset($patient->Nurse->birthday)): ?>
                                <p><b><?php echo e(__('sentence.Age')); ?> :</b> <?php echo e($doctor->Nurse->birthday); ?>

                                    (<?php echo e(\Carbon\Carbon::parse($patient->Nurse->birthday)->age); ?> Years)</p>
                            <?php endif; ?>

                            <?php if(isset($patient->Nurse->gender)): ?>
                                <p><b><?php echo e(__('sentence.Gender')); ?> :</b> <?php echo e(__('sentence.' . $patient->Nurse->gender)); ?></p>
                            <?php endif; ?>

                            <?php if(isset($patient->Nurse->phone)): ?>
                                <p><b><?php echo e(__('sentence.Phone')); ?> :</b> <?php echo e($doctor->Nurse->phone); ?></p>
                            <?php endif; ?>

                            <?php if(isset($patient->Nurse->address)): ?>
                                <p><b><?php echo e(__('sentence.Address')); ?> :</b> <?php echo e($doctor->Nurse->address); ?></p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medicalapp\resources\views/doctor/view.blade.php ENDPATH**/ ?>