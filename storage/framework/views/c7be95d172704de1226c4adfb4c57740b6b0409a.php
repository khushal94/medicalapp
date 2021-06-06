<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.Edit Patient')); ?>

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


        <div class="col-xl-8 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Edit Patient')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('patient.store_edit')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id"
                            value="<?php echo e($patient->id); ?>">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="uploadbox">
                                    <label class="upload_image">
                                        <img src="<?php echo e(empty($patient->Patient->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $patient->Patient->image)); ?>"
                                            alt="Upload Image" title="Upload Image">
                                        <input type="file" name="image" accept="image/png, image/svg, image/jpeg" id="image" style="display: none">
                                    </label>
                                    <label for="image" class="btn btn-primary btn-block btn-upload">Upload</label>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-form-label"><?php echo e(__('sentence.Full Name')); ?>

                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control" id="inputEmail3" name="name"
                                                value="<?php echo e($patient->name); ?>"
                                                placeholder="<?php echo e(__('sentence.Full Name')); ?>">

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Email Address')); ?><font
                                                    color="red">*
                                                </font></label>
                                            <input type="email" class="form-control" id="inputPassword3" name="email"
                                                value="<?php echo e($patient->email); ?>" <?php echo e(__('sentence.Email Address')); ?>>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Birthday')); ?>

                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control birthday" id="birthday" readonly
                                                name="birthday" value="<?php echo e($patient->Patient->birthday); ?>"
                                                placeholder="<?php echo e(__('sentence.Birthday')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                                            <input type="text" class="form-control" id="inputPassword3" name="phone"
                                                value="<?php echo e($patient->Patient->phone); ?>"
                                                placeholder="<?php echo e(__('sentence.Phone')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Gender')); ?>

                                                <font color="red">*
                                                </font>
                                            </label>
                                            <select class="form-control" name="gender">
                                                <option value="<?php echo e($patient->Patient->gender); ?>" selected="selected">
                                                    <?php echo e($patient->Patient->gender); ?></option>
                                                <option value="Male"><?php echo e(__('sentence.Male')); ?></option>
                                                <option value="Female"><?php echo e(__('sentence.Female')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Blood Group')); ?></label>
                                            <select class="form-control" name="blood">
                                                <option value="<?php echo e($patient->Patient->blood); ?>" selected="selected">
                                                    <?php echo e($patient->Patient->blood); ?></option>
                                                <option value="Unknown"><?php echo e(__('sentence.Unknown')); ?></option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Address')); ?></label>
                                            <input type="text" class="form-control" id="inputPassword3" name="address"
                                                value="<?php echo e($patient->Patient->address); ?>"
                                                placeholder="<?php echo e(__('sentence.Address')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Patient Weight')); ?></label>
                                            <input type="text" class="form-control" id="inputPassword3" name="weight"
                                                value="<?php echo e($patient->Patient->weight); ?>"
                                                placeholder="<?php echo e(__('sentence.Patient Weight')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Patient Height')); ?></label>
                                            <input type="text" class="form-control" id="inputPassword3" name="height"
                                                value="<?php echo e($patient->Patient->height); ?>"
                                                placeholder="<?php echo e(__('sentence.Patient Height')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="text-right">
                                                <button type="submit"
                                                    class="btn btn-primary"><?php echo e(__('sentence.Save')); ?></button>
                                            </div>
                                        </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/patient/edit.blade.php ENDPATH**/ ?>