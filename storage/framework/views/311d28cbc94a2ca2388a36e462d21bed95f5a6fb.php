<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.Edit Nurse')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Edit Nurse')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('nurse.store_edit')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id"
                            value="<?php echo e($nurse->id); ?>">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="uploadbox">
                                    <label class="upload_image">
                                        <img src="<?php echo e(empty($nurse->Nurse->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $nurse->Nurse->image)); ?>"
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
                                                value="<?php echo e($nurse->name); ?>"
                                                placeholder="<?php echo e(__('sentence.Full Name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Email Address')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="email" class="form-control" id="inputPassword3" name="email"
                                                value="<?php echo e($nurse->email); ?>"
                                                placeholder="<?php echo e(__('sentence.Email Address')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Birthday')); ?><font color="red">*
                                                </font></label>
                                            <input type="text" class="form-control birthday" id="birthday" readonly
                                                name="birthday" autocomplete="off" value="<?php echo e($nurse->Nurse->birthday); ?>"
                                                placeholder="<?php echo e(__('sentence.Birthday')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                                            <input type="number" class="form-control" id="inputPassword3" name="phone"
                                                value="<?php echo e($nurse->Nurse->phone); ?>"
                                                placeholder="<?php echo e(__('sentence.Phone')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Gender')); ?><font color="red">*
                                                </font></label>
                                            <select class="form-control" name="gender">
                                                <option value="<?php echo e($nurse->Nurse->gender); ?>" selected="selected">
                                                    <?php echo e($nurse->Nurse->gender); ?></option>
                                                <option value="Male"><?php echo e(__('sentence.Male')); ?></option>
                                                <option value="Female"><?php echo e(__('sentence.Female')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Address')); ?></label>
                                            <input type="text" class="form-control" id="inputPassword3" name="address"
                                                value="<?php echo e($nurse->Nurse->address); ?>"
                                                placeholder="<?php echo e(__('sentence.Address')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lat"
                                                class="col-form-label"><?php echo e(__('sentence.Lattitude')); ?></label>
                                            <input type="text" class="form-control" id="lat" name="lat"
                                                value="<?php echo e($nurse->Nurse->lat); ?>"
                                                placeholder="<?php echo e(__('sentence.Lattitude')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="long"
                                                class="col-form-label"><?php echo e(__('sentence.Longitude')); ?></label>
                                            <input type="text" class="form-control" id="long" name="long"
                                                value="<?php echo e($nurse->Nurse->long); ?>"
                                                placeholder="<?php echo e(__('sentence.Longitude')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="city" class="col-form-label"><?php echo e(__('sentence.City')); ?>

                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        value="<?php echo e($nurse->Nurse->city); ?>" placeholder="<?php echo e(__('sentence.City')); ?>">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="state" class="col-form-label"><?php echo e(__('sentence.State')); ?>

                                        <font color="red">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        value="<?php echo e($nurse->Nurse->state); ?>" placeholder="<?php echo e(__('sentence.State')); ?>">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="country" class="col-form-label"><?php echo e(__('sentence.Country')); ?>

                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="country" name="country" autocomplete="off"
                                        value="India" disabled>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="qualification" class="col-form-label"><?php echo e(__('sentence.Qualification')); ?>

                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="qualification" name="qualification"
                                        autocomplete="off" placeholder="<?php echo e(__('sentence.Qualification')); ?>"
                                        value="<?php echo e($nurse->Nurse->qualification); ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description"
                                        class="col-form-label"><?php echo e(__('sentence.Description')); ?></label>
                                    <textarea rows="3" class="form-control" id="description" name="description"
                                        placeholder="<?php echo e(__('sentence.Description')); ?>"><?php echo e($nurse->Nurse->description); ?>

                                              </textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="text-right">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/nurse/edit.blade.php ENDPATH**/ ?>