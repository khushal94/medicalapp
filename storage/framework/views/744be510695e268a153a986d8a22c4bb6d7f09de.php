<?php $__env->startSection('title'); ?>
    <?php echo e(__('sentence.New Doctor')); ?>

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


        <div class="col-md-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Doctor')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('doctor.store')); ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3"
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Full Name')); ?><font color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" name="name">
                                        <?php echo e(csrf_field()); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Email Adress')); ?><font
                                            color="red">*</font></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputPassword3" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Birthday')); ?><font color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="birthday" name="birthday"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Gender')); ?><font color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="gender">
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
                                        <input type="text" class="form-control" id="inputPassword3" name="address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 col-form-label"><?php echo e(__('sentence.City')); ?><font
                                            color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="state" class="col-sm-3 col-form-label"><?php echo e(__('sentence.State')); ?><font
                                            color="red">*</font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="state" name="state">
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
                                            autocomplete="off" value="India" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="speciality"
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Speciality')); ?><font color="red">
                                            *
                                        </font></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="speciality" id="speciality">
                                            <option value="Cardiology"><?php echo e(__('sentence.Cardiology')); ?></option>
                                            <option value="Diagnostic imaging"><?php echo e(__('sentence.Diagnostic imaging')); ?>

                                            </option>
                                            <option value="Ear nose and throat (ENT)">
                                                <?php echo e(__('sentence.Ear nose and throat (ENT)')); ?></option>
                                            <option value="General surgery"><?php echo e(__('sentence.General surgery')); ?></option>
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
                                        class="col-sm-3 col-form-label"><?php echo e(__('sentence.Experience')); ?><font color="red">
                                            *
                                        </font></label>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="experience" name="experience">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-3 col-form-label"><?php echo e(__('sentence.Image')); ?></label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views/doctor/create.blade.php ENDPATH**/ ?>