<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.Edit Coupon')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Edit Coupon')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('coupon.store_edit')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Coupon Name')); ?><font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($coupon->name); ?>">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($coupon->id); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Coupon Code')); ?><font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="code" name="code" value="<?php echo e($coupon->code); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="discount_amount"
                                class="col-sm-3 col-form-label"><?php echo e(__('sentence.Discount Amount')); ?><font color="red">*
                                </font></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="discount_amount" name="discount_amount"
                                    autocomplete="off" value="<?php echo e($coupon->discount_amount); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="discount_type" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Discount Type')); ?>

                                <font color="red">*</font>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="discount_type">
                                    <option value="<?php echo e($coupon->discount_type); ?>" selected="selected"><?php echo e($coupon->discount_type == 'P' ? __('sentence.Percentage') : __('sentence.Amount')); ?></option>
                                    <option value="A"><?php echo e(__('sentence.Amount')); ?></option>
                                    <option value="P"><?php echo e(__('sentence.Percentage')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minimum_amount"
                                class="col-sm-3 col-form-label"><?php echo e(__('sentence.Minimum Amount')); ?></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="minimum_amount" name="minimum_amount" value="<?php echo e($coupon->minimum_amount); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="startingdate" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Starting Date')); ?>

                                <font color="red">*
                                </font>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="startingdate" name="startingdate"
                                    autocomplete="off" readonly value="<?php echo e($coupon->startingdate); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rdvdate" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Ending Date')); ?>

                                <font color="red">*
                                </font>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="endingdate" name="endingdate" autocomplete="off"
                                    readonly value="<?php echo e($coupon->endingdate); ?>">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views\coupon\edit.blade.php ENDPATH**/ ?>