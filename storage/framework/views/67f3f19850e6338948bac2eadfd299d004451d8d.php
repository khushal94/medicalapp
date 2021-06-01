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
                            <center><img src="<?php echo e(empty($doctor->Doctor->image) ? asset('public/img/patient-icon.png') : url('public/imgs/'.$doctor->Doctor->image)); ?>"
                                    class="img-profile rounded-circle img-fluid" style="width: 400px; height:400px"></center>
                            <h4 class="text-center"><b><?php echo e($doctor->name); ?></b></h4>
                            <hr>
                            <?php if(isset($doctor->Doctor->birthday)): ?>
                                <p><b><?php echo e(__('sentence.Age')); ?> :</b> <?php echo e($doctor->Doctor->birthday); ?>

                                    (<?php echo e(\Carbon\Carbon::parse($doctor->Doctor->birthday)->age); ?> Years)</p>
                            <?php endif; ?>

                            <?php if(isset($doctor->Doctor->gender)): ?>
                                <p><b><?php echo e(__('sentence.Gender')); ?> :</b> <?php echo e(__('sentence.' . $doctor->Doctor->gender)); ?></p>
                            <?php endif; ?>

                            <?php if(isset($doctor->Doctor->phone)): ?>
                                <p><b><?php echo e(__('sentence.Phone')); ?> :</b> <?php echo e($doctor->Doctor->phone); ?></p>
                            <?php endif; ?>

                            <?php if(isset($doctor->Doctor->address)): ?>
                                <p><b><?php echo e(__('sentence.Address')); ?> :</b> <?php echo e($doctor->Doctor->address); ?></p>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views\doctor\view.blade.php ENDPATH**/ ?>