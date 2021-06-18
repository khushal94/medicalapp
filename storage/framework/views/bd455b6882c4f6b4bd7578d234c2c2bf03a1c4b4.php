

<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.All Lab Bookings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-8">
                <h6 class="m-0 font-weight-bold text-primary w-75 p-2"><?php echo e(__('sentence.All Lab Bookings')); ?></h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo e(__('sentence.User Name')); ?></th>
                        <th class="text-center"><?php echo e(__('sentence.Payment Id')); ?></th>
                        <th class="text-center"><?php echo e(__('sentence.Is Paid')); ?></th>
                        <th class="text-center"><?php echo e(__('sentence.Package Id')); ?></th>
                        <th class="text-center"><?php echo e(__('sentence.Package Selected')); ?></th>
                        <th class="text-center"><?php echo e(__('sentence.Status')); ?></th>
                        <th class="text-center"><?php echo e(__('sentence.Date')); ?></th>
                        <!-- <th class="text-center"><?php echo e(__('sentence.Actions')); ?></th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $labbookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $labbooking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($labbooking->id); ?></td>
                        <td><a> <?php echo e($labbooking->user_name); ?> </a></td>
                        <td class="text-center"><?php echo e($labbooking->payment_id); ?></td>
                        <td class="text-center">
                            <?php if($labbooking->is_paid): ?>
                            Yes
                            <?php else: ?>
                            No
                            <?php endif; ?>
                        </td>
                        <td class="text-center"><?php echo e($labbooking->package_id); ?></td>
                        <td class="text-center">
                        <?php if($labbooking->package_selected): ?>
                            Yes
                            <?php else: ?>
                            No
                            <?php endif; ?>
                        </td>
                        <td class="text-center"><?php echo e($labbooking->status); ?></td>
                        <td class="text-center"><?php echo e($labbooking->created_at->format('d M Y H:i')); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/labbooking/all.blade.php ENDPATH**/ ?>