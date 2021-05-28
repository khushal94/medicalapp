<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.All Ratings And Reviews')); ?>

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
    <!-- DataTales  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12">
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2"><?php echo e(__('sentence.All Ratings And Reviews')); ?>

                    </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th><?php echo e(__('sentence.User Name')); ?></th>
                            
                            <th><?php echo e(__('sentence.Count')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Feedback')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Created at')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($rating->id); ?></td>
                                <td> <?php echo e($rating->name); ?></td>
                                <td> <?php echo e($rating->count->format('d M Y')); ?> </td>
                                <td> <?php echo e($rating->feedback); ?> - <?php echo e($rating->feedback); ?></td>
                                <td class="text-center"><?php echo e($rating->created_at->format('d M Y H:i')); ?></td>
                                <td>
                                    <?php if($rating->is_deleted == 0): ?>
                                        <a href="<?php echo e(url('rating/update/' . $rating->id . '/' . $rating->is_deleted)); ?>"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('rating/update/' . $rating->id . '/' . $rating->is_deleted)); ?>"
                                            class="btn btn-success btn-circle btn-sm" title="active"><i
                                                class="fas fa-check"></i></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/rating/all.blade.php ENDPATH**/ ?>