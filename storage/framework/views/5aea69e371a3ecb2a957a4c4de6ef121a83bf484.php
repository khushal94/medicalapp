<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.All Nurse Bookings')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2"><?php echo e(__('sentence.All Nurse Bookings')); ?></h6>
                </div>
                <div class="col-4">
                    <a href="<?php echo e(route('coupon.create')); ?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        <?php echo e(__('sentence.New Nurse Booking')); ?></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th><?php echo e(__('sentence.Nurse Name')); ?></th>
                            <th><?php echo e(__('sentence.Patient Name')); ?></th>
                            <th><?php echo e(__('sentence.Visiting Date')); ?></th>
                            <th><?php echo e(__('sentence.Visiting Time')); ?></th>
                            <th><?php echo e(__('sentence.Address')); ?></th>
                            <th><?php echo e(__('sentence.Actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $nursebookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nursebooking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr class="text-center">
                                <td>
                                    <a href="<?php echo e(url('nursebooking/view/' . $nursebooking->id)); ?>">
                                        <?php echo e($nursebooking->id); ?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo e($nursebooking->nurse_name); ?>

                                </td>
                                <td>
                                    <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($patient->id == $nursebooking->patient_id): ?>
                                            <?php echo e($patient->name); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php echo e(date('d-m-Y', strtotime($nursebooking->visit_date))); ?>

                                </td>
                                <td>
                                    <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $nursebooking->visit_time)->format('h:m:s a')); ?>

                                </td>
                                <td>
                                    <?php echo e($nursebooking->address); ?>

                                </td>
                                <td style="white-space:nowrap;">
                                    <a href="<?php echo e(url('nursebooking/view/' . $nursebooking->id)); ?>"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo e(url('nursebooking/edit/' . $nursebooking->id)); ?>"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    <?php if($nursebooking->status == 0): ?>
                                        <a href="<?php echo e(url('nursebooking/update/'. $nursebooking->id .'/' .$nursebooking->status)); ?>"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('nursebooking/update/' . $nursebooking->id . '/' . $nursebooking->status)); ?>"
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/nursebooking/all.blade.php ENDPATH**/ ?>