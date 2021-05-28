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


        <div class="col-xl-8 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.New Doctor')); ?></h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('doctor.store')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-xl-4">
                                
                                <div class="box">
                                    <div class="js--image-preview"></div>
                                    <div class="upload-options">
                                        <label>
                                            <input type="file" class="image-upload" accept="image/*" name="image" />
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-form-label"><?php echo e(__('sentence.Full Name')); ?>

                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="<?php echo e(__('sentence.Full Name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Email Address')); ?><font color="red">
                                                    *</font></label>
                                            <input type="email" class="form-control" id="inputPassword3" name="email" placeholder="<?php echo e(__('sentence.Email Address')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Birthday')); ?><font color="red">*
                                                </font></label>
                                            <input type="text" class="form-control birthday" id="birthday" readonly
                                                name="birthday" autocomplete="off" placeholder="<?php echo e(__('sentence.Birthday')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Phone')); ?></label>
                                            <input type="number" class="form-control" id="inputPassword3" name="phone" placeholder="<?php echo e(__('sentence.Phone')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Gender')); ?><font color="red">*
                                                </font></label>
                                            <select class="form-control" name="gender">
                                                <option value="Male"><?php echo e(__('sentence.Male')); ?></option>
                                                <option value="Female"><?php echo e(__('sentence.Female')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label"><?php echo e(__('sentence.Address')); ?></label>
                                            <input type="text" class="form-control" id="inputPassword3" name="address" placeholder=" <?php echo e(__('sentence.Address')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="experience"
                                                class="col-form-label"><?php echo e(__('sentence.Experience In Years')); ?>

                                                <font color="red">
                                                    *
                                                </font>
                                            </label>
                                            <input type="number" class="form-control" id="experience" name="experience" placeholder="<?php echo e(__('sentence.Experience In Years')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="speciality"
                                                class="col-form-label"><?php echo e(__('sentence.Speciality')); ?><font color="red">
                                                    *
                                                </font></label>
                                            <select class="form-control" name="speciality" id="speciality">
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
                                                <option value="Microbiology"><?php echo e(__('sentence.Microbiology')); ?>

                                                </option>
                                                <option value="Nephrology"><?php echo e(__('sentence.Nephrology')); ?></option>
                                                <option value="Neurology"><?php echo e(__('sentence.Neurology')); ?></option>
                                                <option value="Nutrition and dietetics">
                                                    <?php echo e(__('sentence.Nutrition and dietetics')); ?></option>
                                                <option value="Occupational therapy">
                                                    <?php echo e(__('sentence.Occupational therapy')); ?></option>
                                                <option value="Oncology"><?php echo e(__('sentence.Oncology')); ?></option>
                                                <option value="Ophthalmology"><?php echo e(__('sentence.Ophthalmology')); ?>

                                                </option>
                                                <option value="Orthopaedics"><?php echo e(__('sentence.Orthopaedics')); ?>

                                                </option>
                                                <option value="Pain management clinics">
                                                    <?php echo e(__('sentence.Pain management clinics')); ?></option>
                                                <option value="Physiotherapy"><?php echo e(__('sentence.Physiotherapy')); ?>

                                                </option>
                                                <option value="Radiotherapy"><?php echo e(__('sentence.Radiotherapy')); ?>

                                                </option>
                                                <option value="Renal unit"><?php echo e(__('sentence.Renal unit')); ?></option>
                                                <option value="Rheumatology"><?php echo e(__('sentence.Rheumatology')); ?>

                                                </option>
                                                <option value="Sexual health (genitourinary medicine)">
                                                    <?php echo e(__('sentence.Sexual health (genitourinary medicine)')); ?>

                                                </option>
                                                <option value="Urology"><?php echo e(__('sentence.Urology')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lat"
                                                class="col-form-label"><?php echo e(__('sentence.Lattitude')); ?></label>
                                            <input type="text" class="form-control" id="lat" name="lat" placeholder="<?php echo e(__('sentence.Lattitude')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="long"
                                                class="col-form-label"><?php echo e(__('sentence.Longitude')); ?></label>
                                            <input type="text" class="form-control" id="long" name="long" placeholder="<?php echo e(__('sentence.Longitude')); ?>">
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
                                    <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo e(__('sentence.City')); ?>">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="state" class="col-form-label"><?php echo e(__('sentence.State')); ?>

                                        <font color="red">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="<?php echo e(__('sentence.State')); ?>">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description"
                                        class="col-form-label"><?php echo e(__('sentence.Description')); ?></label>
                                    <textarea rows="3" class="form-control" id="description" name="description" placeholder="<?php echo e(__('sentence.Description')); ?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views\doctor\create.blade.php ENDPATH**/ ?>