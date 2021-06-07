<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.New Nurse Booking')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
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
        </div>

    </div>
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Nurse Booking')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('nursebooking.store')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Nurse Name')); ?><font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="nurse_id">
                                    <option value="" selected disabled>Select Nurse</option>
                                    <?php $__currentLoopData = $nurses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nurse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($nurse->id); ?>"><?php echo e($nurse->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Patient Name')); ?><font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="patient_id">
                                    <option value="" selected disabled>Select Patient</option>
                                    <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($patient->id); ?>"><?php echo e($patient->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="visit_time" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Visiting Time')); ?><font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="datetime-local" class="form-control" id="visit_time" name="visit_time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary"><?php echo e(__('sentence.Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/nursebooking/create.blade.php ENDPATH**/ ?>