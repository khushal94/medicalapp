<?php $__env->startSection('title'); ?>
<?php echo e($patient->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
   <div class="col">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-4">
                  <img src="<?php echo e(asset('public/img/patient-icon.png')); ?>" class="img-profile rounded-circle img-fluid">
               </div>
               <div class="col-8">
                  <h4><b><?php echo e($patient->name); ?></b></h4>
                  <hr>
                  <?php if(isset($patient->Patient->birthday)): ?>
                  <p><b>Age :</b> <?php echo e($patient->Patient->birthday); ?> (<?php echo e(\Carbon\Carbon::parse($patient->Patient->birthday)->age); ?> Years)</p>
                  <?php endif; ?>
                  <?php if(isset($patient->Patient->birthday)): ?>
                  <p><b>Gender :</b> <?php echo e($patient->Patient->gender); ?></p>
                  <?php endif; ?>
                  <?php if(isset($patient->Patient->weight)): ?>
                  <p><b>Weight :</b> <?php echo e($patient->Patient->weight); ?></p>
                  <?php endif; ?>
                  <?php if(isset($patient->Patient->height)): ?>
                  <p><b>Height :</b> <?php echo e($patient->Patient->height); ?></p>
                  <?php endif; ?>
                  <?php if(isset($patient->Patient->blood)): ?>
                  <p><b>Blood Group :</b> <?php echo e($patient->Patient->blood); ?></p>
                  <?php endif; ?>
                  <?php if(isset($patient->Patient->phone)): ?>
                  <p><b>Phone :</b> <?php echo e($patient->Patient->phone); ?></p>
                  <?php endif; ?>
                  <?php if(isset($patient->Patient->address)): ?>
                  <p><b>Address :</b> <?php echo e($patient->Patient->address); ?></p>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\doctor1\resources\views\test\view.blade.php ENDPATH**/ ?>