<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.Edit Doctor')); ?>

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
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Edit Doctor')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('doctor.store_edit')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputEmail3"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Full Name')); ?><font
                                                color="red">*
                                            </font></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="name"
                                                value="<?php echo e($doctor->name); ?>">
                                            <input type="hidden" class="form-control" id="inputEmail3" name="user_id"
                                                value="<?php echo e($doctor->id); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Email Adress')); ?><font
                                                color="red">*</font></label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputPassword3" name="email"
                                                value="<?php echo e($doctor->email); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Birthday')); ?><font
                                                color="red">*
                                            </font></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control birthday" id="birthday" readonly name="birthday"
                                                autocomplete="off" value="<?php echo e($doctor->Doctor->birthday); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" name="phone"
                                                value="<?php echo e($doctor->Doctor->phone); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Gender')); ?><font color="red">
                                                *
                                            </font></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="gender">
                                                <option value="<?php echo e($doctor->Doctor->gender); ?>" selected="selected">
                                                    <?php echo e($doctor->Doctor->gender); ?></option>
                                                <option value="Male"><?php echo e(__('sentence.Male')); ?></option>
                                                <option value="Female"><?php echo e(__('sentence.Female')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Address')); ?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" name="address"
                                                value="<?php echo e($doctor->Doctor->address); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="city" class="col-sm-3 col-form-label"><?php echo e(__('sentence.City')); ?><font
                                                color="red">*
                                            </font></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="city" name="city"
                                                value="<?php echo e($doctor->Doctor->city); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="state" class="col-sm-3 col-form-label"><?php echo e(__('sentence.State')); ?>

                                            <font color="red">*</font>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="state" name="state"
                                                value="<?php echo e($doctor->Doctor->state); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="country" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Country')); ?>

                                            <font color="red">*
                                            </font>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="country" name="country"
                                                autocomplete="off" value="<?php echo e($doctor->Doctor->country); ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="speciality"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Speciality')); ?><font
                                                color="red">
                                                *
                                            </font></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="speciality" id="speciality">
                                                <option value="<?php echo e($doctor->Doctor->speciality); ?>" selected="selected">
                                                    <?php echo e($doctor->Doctor->speciality); ?></option>
                                                <option value="Cardiology"><?php echo e(__('sentence.Cardiology')); ?></option>
                                                <option value="Diagnostic imaging">
                                                    <?php echo e(__('sentence.Diagnostic imaging')); ?>

                                                </option>
                                                <option value="Ear nose and throat (ENT)">
                                                    <?php echo e(__('sentence.Ear nose and throat (ENT)')); ?></option>
                                                <option value="General surgery"><?php echo e(__('sentence.General surgery')); ?>

                                                </option>
                                                <option value="Maternity departments">
                                                    <?php echo e(__('sentence.Maternity departments')); ?></option>
                                                <option value="Microbiology"><?php echo e(__('sentence.Microbiology')); ?></option>
                                                <option value="Nephrology"><?php echo e(__('sentence.Nephrology')); ?></option>
                                                <option value="Neurology"><?php echo e(__('sentence.Neurology')); ?></option>
                                                <option value="Nutrition and dietetics">
                                                    <?php echo e(__('sentence.Nutrition and dietetics')); ?></option>
                                                <option value="Occupational therapy">
                                                    <?php echo e(__('sentence.Occupational therapy')); ?></option>
                                                <option value="Oncology"><?php echo e(__('sentence.Oncology')); ?></option>
                                                <option value="Ophthalmology"><?php echo e(__('sentence.Ophthalmology')); ?></option>
                                                <option value="Orthopaedics"><?php echo e(__('sentence.Orthopaedics')); ?></option>
                                                <option value="Pain management clinics">
                                                    <?php echo e(__('sentence.Pain management clinics')); ?></option>
                                                <option value="Physiotherapy"><?php echo e(__('sentence.Physiotherapy')); ?></option>
                                                <option value="Radiotherapy"><?php echo e(__('sentence.Radiotherapy')); ?></option>
                                                <option value="Renal unit"><?php echo e(__('sentence.Renal unit')); ?></option>
                                                <option value="Rheumatology"><?php echo e(__('sentence.Rheumatology')); ?></option>
                                                <option value="Sexual health (genitourinary medicine)">
                                                    <?php echo e(__('sentence.Sexual health (genitourinary medicine)')); ?></option>
                                                <option value="Urology"><?php echo e(__('sentence.Urology')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="experience"
                                            class="col-sm-3 col-form-label"><?php echo e(__('sentence.Experience')); ?><font
                                                color="red">
                                                *
                                            </font></label>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="experience" name="experience"
                                                value="<?php echo e($doctor->Doctor->experience); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="upload_image">
                                            <img src="<?php echo e(empty($doctor->Doctor->image) ? url('imgs/no-image.png') : url('imgs/doctors/'.now()->monthName.'/'.$doctor->Doctor->image)); ?>" alt="Upload Image" title="Upload Image">
                                            <input type="file" name="image" accept="image/*" id="image" style="display: none"> 
                                        </label>
                                        <label for="image" class="btn btn-primary btn-block">Choose File</label>
                                    </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/doctor/edit.blade.php ENDPATH**/ ?>