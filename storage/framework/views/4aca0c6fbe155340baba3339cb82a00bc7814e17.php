<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.New Package')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Package')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('package.store')); ?>" enctype="multipart/form-data">
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
                                            <label for="name" class="col-form-label"><?php echo e(__('sentence.Package Name')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="<?php echo e(__('sentence.Package Name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lab_name" class="col-form-label"><?php echo e(__('sentence.Lab Name')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="lab_name" name="lab_name"
                                                placeholder="<?php echo e(__('sentence.Lab Name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="rate" class="col-form-label"><?php echo e(__('sentence.Package Rate')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="rate" name="rate"
                                                placeholder="<?php echo e(__('sentence.Package Rate')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lab_test_ids " class="col-form-label"><?php echo e(__('sentence.Test')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="lab_test_ids">
                                                <option value="" selected disabled>Select Test</option>
                                                <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($test->id); ?>"><?php echo e($test->test_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="description"
                                                class="col-form-label"><?php echo e(__('sentence.Description')); ?></label>
                                            <textarea rows="4" class="form-control" id="description" name="description" placeholder="<?php echo e(__('sentence.Description')); ?>"></textarea>
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/package/create.blade.php ENDPATH**/ ?>