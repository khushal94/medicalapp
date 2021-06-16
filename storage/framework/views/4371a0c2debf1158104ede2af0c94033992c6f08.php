<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.New Order')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Order')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('order.store')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Order User')); ?><font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" id="user_id" name="name">
                                    <option value="" selected disabled>Select User</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Order Type')); ?><font
                                    color="red">*
                                </font></label>
                            <div class="col-sm-9">
                                <select class="form-control" id="type" name="type">
                                    <option value="" selected disabled>Select Type</option>
                                    <option value="tablet">Tablet </option>
                                    <option value="syrup capsule">Syrup Capsule</option>
                                    <option value="other">other</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-center" id="buildyourform">
                            <h6>Medicines</h6>
                            <input type="button" value="Add Medicine" class="btn btn-success" id="addMedicine">
                        </div>
                        <div class="row" id="firstmedicine">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="medicines" class="col-form-label"><?php echo e(__('sentence.Order Medicines')); ?>

                                        <font color="red">*</font>
                                    </label>
                                    <select class="form-control" id="medicines" name="medicines[]">
                                        <option value="" selected disabled>Select Medicine</option>
                                        <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($drug->trade_name); ?>"><?php echo e($drug->trade_name); ?></option>
                                            <input type="hidden" value="<?php echo e($drug->rate); ?>" id="selectedprice">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="qty" class="col-form-label"><?php echo e(__('sentence.Medicines Qty')); ?>

                                        <font color="red">*</font>
                                    </label>
                                    <input type="number" name="qty[]" id="qty" value="1" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="price" class="col-form-label"><?php echo e(__('sentence.Rate')); ?>

                                        <font color="red">*</font>
                                    </label>
                                    <input type="number" name="price[]" id="price" value="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/order/create.blade.php ENDPATH**/ ?>