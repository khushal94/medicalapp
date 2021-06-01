<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.All Doctors')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2"><?php echo e(__('sentence.All Doctors')); ?></h6>
                </div>
                <div class="col-4">
                    <a href="<?php echo e(route('doctor.create')); ?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        <?php echo e(__('sentence.New Doctor')); ?></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><?php echo e(__('sentence.Doctor Name')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Email')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Image')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Date')); ?></th>
                            <th class="text-center"><?php echo e(__('sentence.Actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <td><?php echo e($doctor->id); ?></td>
                                <td><a href="<?php echo e(url('doctor/view/' . $doctor->id)); ?>"> <?php echo e($doctor->name); ?> </a></td>
                                <td class="text-center"> <?php echo e($doctor->email); ?> </td>
                                <td class="text-center"><img src="<?php echo e(empty($doctor->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $doctor->image)); ?>"
                                        style="width: 200px;height:200px;object-fit:cover"></td>
                                <td class="text-center"><?php echo e($doctor->created_at->format('d M Y H:i')); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('doctor/view/' . $doctor->user_id)); ?>"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo e(url('doctor/edit/' . $doctor->user_id)); ?>"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    <?php if($doctor->is_deleted == 0): ?>
                                        <a href="<?php echo e(url('doctor/update/' . $doctor->id . '/' . $doctor->is_deleted)); ?>"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('doctor/update/' . $doctor->id . '/' . $doctor->is_deleted)); ?>"
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/doctor/all.blade.php ENDPATH**/ ?>