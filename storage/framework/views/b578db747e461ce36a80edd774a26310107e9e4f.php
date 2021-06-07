<?php $__env->startSection('title'); ?>
    <?php echo e($nursebooking->id); ?>

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
                            <h4 class="text-center"><b><?php echo e($nursebooking->nurse_name); ?></b></h4>
                            <hr>
                            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($nursebooking->patient_id == $patient->id): ?>
                            <p><b><?php echo e(__('sentence.Patient Name')); ?> :</b><?php echo e($patient->name); ?></p>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($nursebooking->visit_date)): ?>
                                <p><b><?php echo e(__('sentence.Visiting Date')); ?> :</b> <?php echo e(date('d-m-Y', strtotime($nursebooking->visit_date))); ?></p>                                
                            <?php endif; ?>
                            <?php if(isset($nursebooking->visit_time)): ?>
                                <p><b><?php echo e(__('sentence.Visiting Time')); ?> :</b> <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $nursebooking->visit_time)->format('h:m:s a')); ?></p>                                
                            <?php endif; ?>
                            <?php if(isset($nursebooking->address)): ?>
                                <p><b><?php echo e(__('sentence.Address')); ?> :</b> <?php echo e($nursebooking->address); ?></p>                                
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/nursebooking/view.blade.php ENDPATH**/ ?>