

<?php $__env->startSection('title'); ?>
    <?php echo e($order->name); ?>

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
                            <h4 class="text-center"><b><?php echo e($order->name); ?></b></h4>
                            <hr>
                            <?php if(isset($order->email)): ?>
                                <p><b><?php echo e(__('sentence.Order Email')); ?> :</b> <?php echo e($order->email); ?></p>
                            <?php endif; ?>

                            <?php if(isset($order->phone)): ?>
                                <p><b><?php echo e(__('sentence.Order Contact')); ?> :</b> <?php echo e($order->phone); ?></p>
                            <?php endif; ?>

                            <?php $__currentLoopData = $order->medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><b>Name :</b> <?php echo e($medicine->trade_name); ?></p>
                            <p><b>Rate :</b> ₹<?php echo e($medicine->rate); ?></p>
                            <?php if(isset($medicine->quantity)): ?>
                            <p><b>Quantity :</b> ₹<?php echo e($medicine->quantity); ?></p>
                            <?php endif; ?>
                            <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                            <p><b>Status :</b> <?php echo e($order->status); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\medicaladmin\resources\views/order/view.blade.php ENDPATH**/ ?>