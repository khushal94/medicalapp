<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.New Coupon')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Coupon')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('coupon.store')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="box">
                                    <div class="js--image-preview"></div>
                                    <div class="upload-options">
                                        <label>
                                            <input type="file" class="image-upload" accept="image/png, image/svg, image/jpeg" name="image" />
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label"><?php echo e(__('sentence.Coupon Name')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(__('sentence.Coupon Name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="code" class="col-form-label"><?php echo e(__('sentence.Coupon Code')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="code" name="code" placeholder="<?php echo e(__('sentence.Coupon Code')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="category"
                                                class="col-form-label"><?php echo e(__('sentence.Select Category')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="category">
                                                <option value="appointment "><?php echo e(__('sentence.Appointment ')); ?></option>
                                                <option value="nurse-visit"><?php echo e(__('sentence.Nurse Visit')); ?></option>
                                                <option value="lab-test"><?php echo e(__('sentence.Lab Test')); ?></option>
                                                <option value="package"><?php echo e(__('sentence.Package')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="discount_amount"
                                                class="col-form-label"><?php echo e(__('sentence.Discount Amount')); ?><font
                                                    color="red">*
                                                </font></label>
                                            <input type="number" class="form-control" id="discount_amount"
                                                name="discount_amount" autocomplete="off" placeholder="<?php echo e(__('sentence.Discount Amount')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="discount_type"
                                                class="col-form-label"><?php echo e(__('sentence.Discount Type')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="discount_type">
                                                <option value="A"><?php echo e(__('sentence.Amount')); ?></option>
                                                <option value="P"><?php echo e(__('sentence.Percentage')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="minimum_amount"
                                                class="col-form-label"><?php echo e(__('sentence.Minimum Amount')); ?></label>
                                            <input type="text" class="form-control" id="minimum_amount"
                                                name="minimum_amount" placeholder="<?php echo e(__('sentence.Minimum Amount')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="startingdate"
                                                class="col-form-label"><?php echo e(__('sentence.Starting Date')); ?>

                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control" id="startingdate" name="startingdate"
                                                autocomplete="off" readonly placeholder="<?php echo e(__('sentence.Starting Date')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="rdvdate" class="col-form-label"><?php echo e(__('sentence.Ending Date')); ?>

                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control" id="endingdate" name="endingdate"
                                                autocomplete="off" readonly placeholder="<?php echo e(__('sentence.Ending Date')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-right">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('sentence.Save')); ?></button>
                                    </div>
                                </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/coupon/create.blade.php ENDPATH**/ ?>