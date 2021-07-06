

<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.All Ambulance Bookings')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2"><?php echo e(__('sentence.All Ambulance Bookings')); ?></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><?php echo e(__('sentence.User Id')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Booking Time')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.City')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.State')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Area')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Address')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Description')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Date')); ?></th>
                            <!-- <th class="text-center"><?php echo e(__('sentence.Actions')); ?></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ambulances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ambulance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($ambulance->id); ?></td>
                                <td><a> <?php echo e($ambulance->user_id); ?> </a></td>
                                <td class="text-center"> <?php echo e($ambulance->booking_time); ?> </td>
                                <td class="text-center"><?php echo e($ambulance->city); ?></td>
                                <td class="text-center"><?php echo e($ambulance->state); ?></td>
                                <td class="text-center"><?php echo e($ambulance->area); ?></td>
                                <td class="text-center"><?php echo e($ambulance->address); ?></td>
                                <td class="text-center"><?php echo e($ambulance->description); ?></td>
                                <td class="text-center"><?php echo e($ambulance->created_at->format('d M Y H:i')); ?></td>
                                <!-- <td class="text-center">
                                    <a href="<?php echo e(url('nurse/view/' . $nurse->id)); ?>"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo e(url('nurse/edit/' . $nurse->id)); ?>"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    <?php if($nurse->is_deleted == 0): ?>
                                        <a href="<?php echo e(url('nurse/update/' . $nurse->id . '/' . $nurse->is_deleted)); ?>"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('nurse/update/' . $nurse->id . '/' . $nurse->is_deleted)); ?>"
                                            class="btn btn-success btn-circle btn-sm" title="active"><i
                                                class="fas fa-check"></i></a>
                                    <?php endif; ?>
                                </td> -->
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/ambulance/all.blade.php ENDPATH**/ ?>