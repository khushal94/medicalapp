<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.Add Drug')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('sentence.Add Drug')); ?></h6>
         </div>
         <div class="card-body">
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
            <form method="post" action="<?php echo e(route('drug.store')); ?>">
               <div class="form-group">
                  <label for="exampleInputEmail1">Trade Name *</label>
                  <input type="text" class="form-control" name="trade_name" id="TradeName" aria-describedby="TradeName">
                  <?php echo e(csrf_field()); ?>

               </div>
               <div class="form-group">
                  <label for="GenericName">Generic Name *</label>
                  <input type="text" class="form-control" name="generic_name" id="GenericName">
               </div>
               <div class="form-group">
                  <label for="Note">Prescription</label>
                  <input type="text" class="form-control" name="note" id="Note">
               </div>
               <div class="form-group">
                  <label for="Rate">Rate</label>
                  <input type="number" class="form-control" name="rate" id="Rate">
               </div>
               <div class="form-group">
                  <label for="type_sell">Type of Sell</label>
                  <input type="text" class="form-control" name="type_sell" id="type_sell">
               </div>
               <div class="form-group">
                  <label for="manufacturer">Manufacturer</label>
                  <input type="text" class="form-control" name="manufacturer" id="manufacturer">
               </div>
               <div class="form-group">
                  <label for="country_origin">Country of origin</label>
                  <input type="text" class="form-control" name="country_origin" id="country_origin">
               </div>
               <div class="form-group">
                  <label for="Salt">Salt</label>
                  <input type="text" class="form-control" name="salt" id="Salt">
               </div>
               <div class="form-group">
                  <label for="uses">Uses of (Medicine name)</label>
                  <input type="text" class="form-control" name="uses" id="uses">
               </div>
               <div class="form-group">
                  <label for="alternate">Alternate Medicines/Salt</label>
                  <textarea rows="4" class="form-control" name="alternate" id="alternate"></textarea>
               </div>
               <div class="form-group">
                  <label for="side_effect">Side Effects</label>
                  <input type="text" class="form-control" name="side_effect" id="side_effect">
               </div>
               <div class="form-group">
                  <label for="direction_use">Directions for use</label>
                  <textarea rows="4" class="form-control" name="direction_use" id="direction_use"></textarea>
               </div>
               <div class="form-group">
                  <label for="therapeutic">Therapeutic Class</label>
                  <input type="text" class="form-control" name="therapeutic" id="therapeutic">
               </div>
               <button type="submit" class="btn btn-primary"><?php echo e(__('sentence.Save')); ?></button>
            </form>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/drug/create.blade.php ENDPATH**/ ?>